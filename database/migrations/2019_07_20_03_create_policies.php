<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmbr')->unique();
            $table->string('customer_code');
            $table->foreign('customer_code')->references('code')->on('customers');
            $table->string('type');
            $table->string('sub_type');
            $table->text('assured');
            $table->string('location');
            $table->double('sum_insured', 8, 2);
            $table->date('issued_on');
            $table->date('coverage_from');
            $table->date('coverage_to');
            $table->date('posting_date');

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
        Schema::dropIfExists('policies');
    }
}
