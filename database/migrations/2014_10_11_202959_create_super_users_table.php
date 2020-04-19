<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('super_users', function (Blueprint $table) {
      $table->id();
      $table->string('name', 150)->unique();
      $table->string('email', 150)->unique();
      $table->string('password');
      $table->string('image')->nullable();
      $table->integer('role')->nullable();
      $table->string('verify_token')->nullable();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('super_users');
  }
}
