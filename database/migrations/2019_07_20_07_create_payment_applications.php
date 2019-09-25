<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmbr');
            $table->foreign('nmbr')->references('nmbr')->on('payments');
            $table->string('apply_to');
            $table->foreign('apply_to')->references('nmbr')->on('bills');
            $table->double('amount', 8, 2);
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
        Schema::dropIfExists('payment_applications');
    }
}
