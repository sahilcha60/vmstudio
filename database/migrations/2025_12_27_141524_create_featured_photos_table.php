<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('featured_photos', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // store image path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('featured_photos');
    }
};
