<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Rename existing column
        Schema::table('spotlights', function (Blueprint $table) {
            $table->renameColumn('image', 'image_old');
        });

        // 2. Add new JSON column
        Schema::table('spotlights', function (Blueprint $table) {
            $table->json('image')->nullable()->after('image_old');
        });

        // 3. Move old string data into JSON array
        DB::table('spotlights')->get()->each(function ($row) {
            DB::table('spotlights')
                ->where('id', $row->id)
                ->update([
                    'image' => json_encode([$row->image_old]),
                ]);
        });

        // 4. Drop old column
        Schema::table('spotlights', function (Blueprint $table) {
            $table->dropColumn('image_old');
        });
    }

    public function down(): void
    {
        // 1. Recreate string column
        Schema::table('spotlights', function (Blueprint $table) {
            $table->string('image_old')->nullable();
        });

        // 2. Restore first image from JSON
        DB::table('spotlights')->get()->each(function ($row) {
            $images = json_decode($row->image, true);

            DB::table('spotlights')
                ->where('id', $row->id)
                ->update([
                    'image_old' => $images[0] ?? null,
                ]);
        });

        // 3. Drop JSON column and rename back
        Schema::table('spotlights', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->renameColumn('image_old', 'image');
        });
    }
};
