<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->smallInteger('rooms');
            $table->smallInteger('beds');
            $table->smallInteger('bathrooms');
            $table->integer('mq');
            $table->integer('latitude');
            $table->integer('longitude');
            $table->string('img_path');
            $table->string('wi-fi')->nullable();
            $table->string('parking_space')->nullable();
            $table->string('pool')->nullable();
            $table->string('sauna')->nullable();
            $table->string('active');
            $table->string('sponsored');
            $table->bigInteger('user_id')->unsigned()->index();
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
        Schema::dropIfExists('apartments');
    }
}
