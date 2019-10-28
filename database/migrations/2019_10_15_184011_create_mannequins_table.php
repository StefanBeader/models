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
            $table->string('nick_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('instagram')->nullable();
            $table->string('gender');
            $table->date('birthday');
            $table->string('school');
            $table->string('school_type')->nullable();
            $table->integer('height');
            $table->integer('waist');
            $table->integer('bust');
            $table->integer('hips');
            $table->integer('shoe_size');
            $table->string('eyes_color');
            $table->string('hair_color');
            $table->tinyInteger('status')->default(1);
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
