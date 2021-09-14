<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyncTempPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sync_temp_patients', function (Blueprint $table) {
            $table->integer('id');
            $table->boolean('accountstatus')->nullable();
            $table->string('cellphone')->nullable();
            $table->timestampTz('dateofbirth')->nullable();
            $table->integer('clinic');
            $table->string('clinicname')->nullable();
            $table->integer('mainclinic');
            $table->string('mainclinicname');
            $table->string('firstnames')->nullable();
            $table->string('homephone')->nullable();
            $table->string('lastname')->nullable();
            $table->char('modified', 1)->nullable();
            $table->string('patientid');
            $table->string('province')->nullable();
            $table->char('sex', 1)->nullable();
            $table->string('workphone')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('nextofkinname')->nullable();
            $table->string('nextofkinphone')->nullable();
            $table->string('race')->nullable();
            $table->string('uuidopenmrs')->nullable();
            $table->string('datainiciotarv')->nullable();
            $table->char('syncstatus', 1)->nullable()->default('P');
            $table->string('syncuuid')->nullable();
            $table->string('clinicuuid')->nullable();
            $table->string('mainclinicuuid')->nullable();
            $table->text('jsonprescribeddrugs')->nullable();
            $table->timestampTz('prescriptiondate')->nullable();
            $table->integer('duration')->nullable()->default(0);
            $table->timestampTz('prescriptionenddate')->nullable();
            $table->string('regimenome')->nullable();
            $table->string('linhanome')->nullable();
            $table->integer('dispensatrimestral')->nullable()->default(0);
            $table->integer('dispensasemestral')->nullable()->default(0);
            $table->string('prescriptionid')->nullable();
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
        Schema::dropIfExists('sync_temp_patients');
    }
}
