<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',255);//255文字まで
            $table->string('email')->unique();
            $table->string('password',255);
            $table->string('bio',450);
            $table->string('image',255)->default('null.png');
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->default(DB::raw('current_timestamp on update current_timestamp'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('users');
    }
}
