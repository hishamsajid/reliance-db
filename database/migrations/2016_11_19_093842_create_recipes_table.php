<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('R_id')->unique();
            $table->string('R_remarks');
            $table->integer('R_order_no');
            $table->integer('R_batchSize');
            $table->integer('R_quantity');
            $table->integer('IN_id_FK')->unsigned()->references('IN_id')->on('inventories');
            $table->timestamps();

        });

        Schema::table('recipes', function(Blueprint $table) {

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
