<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmbr', 20)->unique();
            $table->string('type', 10);
            $table->string('customer_code');
            $table->foreign('customer_code')->references('code')->on('customers');
            $table->string('policy_nmbr');
            $table->foreign('policy_nmbr')->references('nmbr')->on('policies');
            $table->date('posting_date');
            $table->text('remarks');
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
        Schema::dropIfExists('bills');
    }
}
