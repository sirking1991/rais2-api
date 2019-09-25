<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaims extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmbr')->unique();
            $table->string('customer_code');
            $table->foreign('customer_code')->references('code')->on('customers');
            $table->string('policy_nmbr');
            $table->foreign('policy_nmbr')->references('nmbr')->on('policies');
            $table->date('requested_on');
            $table->date('issued_on');
            $table->double('amount_filed', 8, 2);
            $table->string('status');
            $table->date('granted_denied_on');
            $table->double('granted_claim_amount', 8, 2);
            $table->text('notes');
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
        Schema::dropIfExists('claims');
    }
}
