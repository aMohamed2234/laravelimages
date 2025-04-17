<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->text('excerpt')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('featured_image')->nullable();
            $table->foreignId('blog_category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('read_time')->nullable()->comment('In minutes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
