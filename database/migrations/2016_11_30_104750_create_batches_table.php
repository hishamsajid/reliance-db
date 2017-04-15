<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('B_id')->unique();
            $table->timestamps();
            $table->string('B_remarks');
            $table->integer('B_size')->default()->null();
            $table->string('B_item');
            $table->string('B_quantity');
            $table->integer('R_id_FK')->unsigned()->references('R_id')->on('recipes');
            $table->integer('B_orderNo')->default()->null();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
