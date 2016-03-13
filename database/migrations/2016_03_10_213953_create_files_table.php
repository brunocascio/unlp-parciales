<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('files', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('url');
      $table->enum('type', file_allowed_extensions());
      $table->integer('resource_id')->unsigned();

      $table->foreign('resource_id')
      ->references('id')
      ->on('resources')
      ->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('files');
  }
}
