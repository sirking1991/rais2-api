<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrecommComputations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precomm_computations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmbr')->index();
            $table->string('endorsement_nmbr')->index();
            // fire
            $table->double('fl');
            $table->double('fl_cr');
            $table->double('rsmd');
            $table->double('rsmd_cr');
            $table->double('bh');
            $table->double('bh_cr');
            $table->double('efteq');
            $table->double('efteq_cr');
            $table->double('fs_tax');
            // motor
            $table->double('od');
            $table->double('od_cr');
            $table->double('theft');
            $table->double('theft_cr');
            $table->double('pvctpl');
            $table->double('pvctpl_cr');
            $table->double('cvctpl');
            $table->double('cvctpl_cr');
            $table->double('other');
            $table->double('other_cr');
            $table->double('loss');
            $table->double('loss_cr');
            $table->double('pd');
            $table->double('pd_cr');
            // misc
            $table->double('premium');
            $table->double('premium_cr');
            // common
            $table->double('vat');
            $table->double('itpa');
            $table->double('doc_stamp');
            $table->double('mun_tax');
            $table->double('premium_payable');
            $table->double('total_premium');
            $table->double('total_stamps');
            $table->double('total_ps');
            $table->double('total_uci');
            $table->double('withholding_tax');

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
        Schema::dropIfExists('precomm_computations');
    }
}
