<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->text('post_headline');
            $table->text('post_description');
            $table->string('post_image')->nullable();
            $table->unsignedInteger('post_category');
            $table->text('post_source_url')->nullable();
            $table->string('post_language')->nullable();
            $table->string('country')->nullable();
            $table->string('post_source_name')->default('30SNews');
            $table->unsignedBigInteger('post_author_id')->nullable();
            $table->dateTime('post_schedule_post')->nullable();
            $table->boolean('post_publish_status')->default(true);
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
        Schema::dropIfExists('posts');
    }
}
