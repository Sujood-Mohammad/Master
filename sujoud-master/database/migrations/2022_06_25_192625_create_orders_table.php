<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            // $table->bigIncrements('id');
            // $table->integer('place_id')->unsigned()->nullable()->index();
            // $table->string('room_name');
            // $table->string('style');
            // $table->text('desc');
            // $table->integer('price');
            // $table->integer('capacity');
            // $table->text('image');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
