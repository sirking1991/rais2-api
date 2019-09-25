<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndorsements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorsements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmbr')->unique();
            $table->string('policy_nmbr');
            $table->foreign('policy_nmbr')->references('nmbr')->on('policies');
            $table->date('issued_on');
            $table->date('effectivity_date');
            $table->double('amount_offset', 8, 2);
            $table->date('new_coverage_from');
            $table->date('new_coverage_to');
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
        Schema::dropIfExists('endorsements');
    }
}
