<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchFillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_fills', function (Blueprint $table) {
            $table->increments('BF_id')->unique();
            $table->integer('BF_PackingId');
            $table->integer('BF_litres');
            $table->integer('BF_drums');
            $table->integer('FK_B_id')->references('batch')->on('B_id');
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
        Schema::dropIfExists('batch_fills');
    }
}
