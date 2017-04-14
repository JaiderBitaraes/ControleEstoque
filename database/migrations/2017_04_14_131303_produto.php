<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('unity_id');
            $table->string('name');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('unity_id')->references('id')->on('unity');
            $table->double('value_cost',5,2);
            $table->double('value_sell',5,2);
            $table->integer('qtd');
            $table->date('created');
            $table->date('expiration');
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
        Schema::dropIfExists('products');
    }
}
