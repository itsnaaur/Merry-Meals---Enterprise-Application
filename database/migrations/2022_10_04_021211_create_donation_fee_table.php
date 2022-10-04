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
        Schema::create('donation_fee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('donor_fee');
            $table->string('donor_tribute');
            $table->string('donor_honoree_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_fee');
    }
};
