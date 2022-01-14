<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email');
            $table->string('whatsappNumber');
            $table->string('lineID');
            $table->string('githubGitlabID');
            $table->string('birthPlace');
            $table->string('dayBirthDate');
            $table->string('monthBirthDate');
            $table->string('yearBirthDate');
            $table->unsignedBigInteger('teamId');
            $table->foreign('teamId')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('CV');
            // $table->string('flazzCard');
            $table->string('IDCard');
            $table->integer('memberNumber');
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
        Schema::dropIfExists('members');
    }
}
