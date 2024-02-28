<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //商品
        Schema::create('products',function(Blueprint $table) {
            $table->increments('id');
            $table->integer('author');
            $table->string('title',300);
            $table->string('color',255);
            $table->string('genre',255);
            $table->string('technique',255);
            $table->integer('price');
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('products');
    }
}
