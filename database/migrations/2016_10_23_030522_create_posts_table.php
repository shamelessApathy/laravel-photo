<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    // blog table
    Schema::create('posts', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('post_type_id')-> unsigned()-> default(0);
      $table -> integer('author_id') -> unsigned() -> default(0);
      $table->foreign('author_id')
          ->references('id')->on('users')
          ->onDelete('cascade');
      $table->string('title')->nullable()->unique();
      $table->text('body');
      $table->string('slug')->nullable()->unique();
      $table->boolean('active')->nullable();;
      $table->timestamps();
      $table->string('image_path')->nullable();
    });
  }
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    // drop blog table
    Schema::drop('posts');
  }
}