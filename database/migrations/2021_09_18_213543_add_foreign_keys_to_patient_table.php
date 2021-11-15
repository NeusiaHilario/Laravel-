<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient', function (Blueprint $table) {
            $table->foreign('clinic', 'fk340c82e584bf0153')->references('id')->on('clinic');
            $table->foreign('clinic', 'patient_clinic')->references('id')->on('clinic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient', function (Blueprint $table) {
            $table->dropForeign('fk340c82e584bf0153');
            $table->dropForeign('patient_clinic');
        });
    }
}
