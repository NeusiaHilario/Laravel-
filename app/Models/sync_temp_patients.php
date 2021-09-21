<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sync_temp_patients extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /** protected $table="sync_temp_patients"; */
    protected $fillable = [
        'accountstatus',
        'cellphone',
        'dateofbirth',
        'clinic',
        'clinicname',
        'mainclinic',
        'firstnames',
        'homephone',
        'lastname',
        'modified',
        'patientid',
        'province',
        'sex',
        'workphone',
        'address1',
        'address2',
        'address3',
        'nextofkinname',
        'nextofkinphone',
        'race',
        'uuidopenmrs',
        'datainiciotarv',
        'syncstatus',
        'syncuuid',
        'clinicuuid',
        'mainclinicuuid',
        'jsonprescribeddrugs',
        'prescriptiondate',
        'duration',
        'prescriptionenddate',
        'regimenome',
        'linhanome',
        'dispensatrimestral',
        'dispensasemestral',
        'prescriptionid',
        'prescricaoespecial',
        'motivocriacaoespecia',
        'mainclinicname',
        'dispensatrimestral',
        'sync_temp_patients_id'
    ];
    
    public function sync_temp_dispense(){
        return $this->hasMany('App\Models\sync_temp_dispense', 'id', 'sync_temp_patients_id');
    }
}
