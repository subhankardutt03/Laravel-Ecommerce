<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_category_id');
            $table->string('blog_post_title_en');
            $table->string('blog_post_title_ben');
            $table->string('blog_post_title_hin');
            $table->string('blog_post_slug_en');
            $table->string('blog_post_slug_ben');
            $table->string('blog_post_slug_hin');
            $table->string('blog_post_image');
            $table->text('blog_post_details_en');
            $table->text('blog_post_details_ben');
            $table->text('blog_post_details_hin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}