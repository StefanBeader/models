<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMannequinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mannequins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('city')->nullable();
            $table->string('instagram')->nullable();
            $table->string('gender');
            $table->date('birthday');
            $table->string('school');
            $table->integer('height');
            $table->integer('waist');
            $table->integer('bust');
            $table->integer('hips');
            $table->integer('shoe_size');
            $table->string('eyes_color');
            $table->string('hair_color');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('mannequins');
    }
}
