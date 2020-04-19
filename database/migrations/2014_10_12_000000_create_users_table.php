<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',150)->unique();
            $table->string('email', 150)->unique();
            $table->set('role', ['company','male','female','other']);
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('birthday')->nullable();
            $table->string('verify_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->set('status',[0,1,2,3,4,5])->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
