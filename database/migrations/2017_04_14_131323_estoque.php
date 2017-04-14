<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estoque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id');
            $table->integer('situation_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('situation_id')->references('id')->on('situation');
            $table->integer('qtd_min');
            $table->integer('qtd_max');
            $table->integer('input');
            $table->integer('output');
            
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
         Schema::dropIfExists('stock');
    }
}
