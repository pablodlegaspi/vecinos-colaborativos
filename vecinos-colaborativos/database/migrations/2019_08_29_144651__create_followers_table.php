<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('followers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('follower');
          $table->foreign('follower')->references('id')->on('users');
          $table->unsignedBigInteger('followed');
          $table->foreign('followed')->references('id')->on('users');
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
      Schema::dropIfExists('followers');
    }
}
