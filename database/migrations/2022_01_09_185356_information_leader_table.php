<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InformationLeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leader', function (Blueprint $table) {
            $table->id('id');
            $table->string('leader_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified')->nullable();
            $table->unsignedBIgInteger('whatsapp');
            $table->string('line')->unique();
            $table->string('github');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('cv');
            $table->string('id_card');

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
        Schema::dropIfExists('leader');
    }
}
