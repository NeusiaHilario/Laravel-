<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyncTempDispenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sync_temp_dispense', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('clinicalstage')->nullable();
            $table->char('current', 1)->nullable();
            $table->timestampTz('date')->nullable();
            $table->integer('doctor')->nullable();
            $table->integer('duration')->nullable();
            $table->char('modified', 1)->nullable();
            $table->integer('patient');
            $table->float('weight')->nullable();
            $table->string('reasonforupdate')->nullable();
            $table->string('notes')->nullable();
            $table->timestampTz('enddate')->nullable();
            $table->string('drugtypes', 20)->nullable();
            $table->string('regimenome')->nullable();
            $table->timestampTz('datainicionoutroservico', 6)->nullable();
            $table->string('motivomudanca', 32)->nullable();
            $table->string('linhanome')->nullable();
            $table->char('ppe', 1)->nullable()->default('F');
            $table->char('ptv', 1)->nullable()->default('F');
            $table->char('tb', 1)->nullable()->default('F');
            $table->char('tpi', 1)->nullable()->default('F');
            $table->char('tpc', 1)->nullable()->default('F');
            $table->integer('dispensatrimestral')->default(0);
            $table->string('tipodt')->nullable();
            $table->char('gaac', 1)->nullable()->default('F');
            $table->char('af', 1)->nullable()->default('F');
            $table->char('ca', 1)->nullable()->default('F');
            $table->char('ccr', 1)->nullable()->default('F');
            $table->char('saaj', 1)->nullable()->default('F');
            $table->char('fr', 1)->nullable()->default('F');
            $table->string('amountpertime')->nullable();
            $table->timestampTz('dispensedate')->nullable();
            $table->string('drugname')->nullable();
            $table->timestampTz('expirydate')->nullable();
            $table->string('patientid')->nullable();
            $table->string('patientfirstname')->nullable();
            $table->string('patientlastname')->nullable();
            $table->string('dateexpectedstring')->nullable();
            $table->timestampTz('pickupdate')->nullable();
            $table->integer('timesperday')->nullable();
            $table->integer('weekssupply')->nullable();
            $table->string('qtyinhand')->nullable();
            $table->string('summaryqtyinhand')->nullable();
            $table->string('qtyinlastbatch')->nullable();
            $table->char('syncstatus', 1)->nullable()->default('P');
            $table->string('syncuuid')->nullable();
            $table->string('uuidopenmrs')->nullable();
            $table->integer('mainclinic');
            $table->string('mainclinicname');
            $table->string('mainclinicuuid')->nullable();
            $table->string('prescriptionid')->nullable();
            $table->string('tipods')->nullable();
            $table->integer('dispensasemestral')->default(0);
            $table->string('durationsentence')->nullable();
            $table->char('dc', 1)->nullable()->default('F');
            $table->char('prep', 1)->nullable()->default('F');
            $table->char('ce', 1)->nullable()->default('F');
            $table->char('cpn', 1)->nullable()->default('F');
            $table->char('prescricaoespecial', 1)->nullable()->default('F');
            $table->string('motivocriacaoespecial')->nullable()->default('');
            $table->primary(['id', 'mainclinicname']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sync_temp_dispense');
    }
}
