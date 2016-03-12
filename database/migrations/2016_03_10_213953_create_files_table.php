<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{

  protected static $fileTypes = file_allowed_extensions();
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
      $table->enum('type', static::$fileTypes);
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
