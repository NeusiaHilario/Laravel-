<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

\Carbon\Carbon::setToStringFormat('d-m-Y');
class sync_temp_dispense extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /** protected $table="sync_temp_dispense"; */
    protected $dateFormat = 'Y-m-d ';
    protected $dates = ['dispensedate', 'pickupdate', 'dateexpectedstring'];
    protected $fillable = [
        'id',
        'clinicalstage',
        'current',
        'date',
        'doctor',
        'duration',
        'modified',
        'patient',
        'weight',
        'reasonforupdate',
        'notes',
        'enddate',
        'drugtypes',
        'regimenome',
        'datainicionoutroservico',
        'motivomudanca',
        'linhanome',
        'ppe',
        'ptv',
        'tb',
        'tpi',
        'tpc',
        'dispensatrimestral',
        'tipodt',
        'gaac',
        'af',
        'ca',
        'ccr',
        'saaj',
        'fr',
        'amountpertime',
        'dispensedate',
        'drugname',
        'expirydate',
        'patientid',
        'patientfirstname',
        'patientlastname',
        'dateexpectedstring',
        'pickupdate',
        'timesperday',
        'weekssupply',
        'qtyinhand',
        'summaryqtyinhand',
        'qtyinlastbatch',
        'syncstatus',
        'syncuuid',
        'uuidopenmrs',
        'mainclinic',
        'mainclinicname',
        'mainclinicuuid',
        'prescriptionid',
        'tipods',
        'dispensasemestral',
        'durationsentence',
        'dc',
        'prep',
        'ce',
        'cpn',
        'prescricaoespecial',
        'motivocriacaoespecial'
        

    ];


   
}