<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsListsTable extends Migration
{
  public function up()
  {
    Schema::create('friends_lists', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_1')->references('id')->on('users')->onDelete('cascade');
      $table->foreignId('user_2')->references('id')->on('users')->onDelete('cascade');
      $table->set('status', [0, 1, 2, 3, 4])->default(0);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('friends_lists');
  }
}
