<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKedatangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedatangans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('minit_mesyuarat_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->timestamps();


            $table->foreign('minit_mesyuarat_id')->references('id')->on('minit_mesyuarats')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kedatangans');
    }
}
