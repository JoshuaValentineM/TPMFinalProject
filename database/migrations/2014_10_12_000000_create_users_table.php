<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('member');
            // $table->string('name');
            $table->string('email');
            //username == teamname
            $table->string('username');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token')->default(Str::random(60));
            $table->string('binusian');
            $table->string('fullName');
            // $table->string('emailLeader');
            $table->string('whatsappNumber');
            $table->string('lineID');
            $table->string('githubGitlabID');
            $table->string('birthPlace');
            $table->string('dayBirthDate');
            $table->string('monthBirthDate');
            $table->string('yearBirthDate');
            $table->string('CV');
            // // // $table->string('flazzCard');
            $table->string('IDCard');
            $table->integer('verification')->default(0);
            $table->string('payment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
