<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('member_name');
            $table->string('member_address');
            $table->string('member_phone');
            $table->string('order_menu_image');
            $table->string('order_menu_name');
            // $table->string('order_menu_type');
            $table->string('order_menu_restaurant');
            $table->string('menu_plan');
            $table->string('start_cooking_time')->nullable();
            $table->string('order_cooking_status')->nullable();
            $table->string('order_received_status')->nullable();
            $table->integer('member_id');
            $table->integer('user_id');
            $table->integer('menu_id');
            $table->integer('partner_id');
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
        Schema::dropIfExists('orders');
    }
};