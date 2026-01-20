<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Add portfolio_category_id to portfolio_images and portfolio_tools
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->foreignId('portfolio_category_id')->nullable()->after('id')->constrained()->onDelete('cascade');
        });

        Schema::table('portfolio_tools', function (Blueprint $table) {
            $table->foreignId('portfolio_category_id')->nullable()->after('id')->constrained()->onDelete('cascade');
        });

        // Migrate existing data from portfolio_items
        $this->migrateExistingData();

        // Remove old portfolio_item_id columns
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->dropColumn('portfolio_item_id');
        });

        Schema::table('portfolio_tools', function (Blueprint $table) {
            $table->dropColumn('portfolio_item_id');
        });

        // Optionally, you can drop portfolio_items table if it's no longer needed
        // Schema::dropIfExists('portfolio_items');
    }

    public function down(): void
    {
        // Reverse changes: re-add portfolio_item_id (nullable) and drop category_id
        Schema::table('portfolio_images', function (Blueprint $table) {
            $table->foreignId('portfolio_item_id')->nullable()->after('id')->constrained()->onDelete('cascade');
            $table->dropForeign(['portfolio_category_id']);
            $table->dropColumn('portfolio_category_id');
        });

        Schema::table('portfolio_tools', function (Blueprint $table) {
            $table->foreignId('portfolio_item_id')->nullable()->after('id')->constrained()->onDelete('cascade');
            $table->dropForeign(['portfolio_category_id']);
            $table->dropColumn('portfolio_category_id');
        });
    }

    /**
     * Migrate existing data from portfolio_items to portfolio_categories
     */
    protected function migrateExistingData(): void
    {
        // Move PortfolioImage records
        \DB::statement('
            UPDATE portfolio_images AS pi
            INNER JOIN portfolio_items AS pitem
            ON pi.portfolio_item_id = pitem.id
            SET pi.portfolio_category_id = pitem.portfolio_category_id
        ');

        // Move PortfolioTool records
        \DB::statement('
            UPDATE portfolio_tools AS pt
            INNER JOIN portfolio_items AS pitem
            ON pt.portfolio_item_id = pitem.id
            SET pt.portfolio_category_id = pitem.portfolio_category_id
        ');
    }
};
