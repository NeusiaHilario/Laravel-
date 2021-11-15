<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->boolean('accountstatus')->nullable();
            $table->string('cellphone')->nullable();
            $table->timestampTz('dateofbirth')->nullable();
            $table->integer('clinic');
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
            $table->string('uuidopenmrs')->nullable()->unique('patient_un_uuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
