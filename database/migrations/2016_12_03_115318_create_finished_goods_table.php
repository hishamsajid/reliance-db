<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinishedGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finished_goods', function (Blueprint $table) {
            $table->increments('FG_id')->unique();
            $table->string('FG_brand');
            $table->string('FG_type');
            $table->string('FG_shadeName');
            $table->integer('FG_shadeNo');
            $table->string('FG_specification');
            $table->string('FG_unit');
            $table->integer('FK_BF_id')->references('batch_fills')->on('BF_id');

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
        Schema::dropIfExists('finished_goods');
    }
}
