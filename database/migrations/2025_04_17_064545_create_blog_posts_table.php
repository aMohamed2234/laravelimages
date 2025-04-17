<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('icon_class')->nullable()->comment('Font Awesome icon class');
            $table->string('color')->default('#6B73FF');
            $table->timestamps();
        });

        // Insert default categories
        DB::table('blog_categories')->insert([
            ['name' => 'Career Advice', 'slug' => 'career-advice', 'icon_class' => 'fa-briefcase', 'color' => '#6B73FF'],
            ['name' => 'Success Stories', 'slug' => 'success-stories', 'icon_class' => 'fa-lightbulb', 'color' => '#9F7AEA'],
            ['name' => 'Global Alumni', 'slug' => 'global-alumni', 'icon_class' => 'fa-globe', 'color' => '#38A169'],
            ['name' => 'Campus News', 'slug' => 'campus-news', 'icon_class' => 'fa-graduation-cap', 'color' => '#D69E2E'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
};
