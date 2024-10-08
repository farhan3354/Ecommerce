<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_blog_posts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
