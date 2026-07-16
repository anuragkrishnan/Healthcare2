<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    protected $table = 'consultants';
    protected $primaryKey = 'doctorId';
    public $incrementing = false;
    protected $keyType = 'string';


    protected $fillable = [
        'doctorId',
        'name',
        'costCentre',
        'address',
        'qualification',
        'dob',
        'gender',
        'contactNo',
        'email',
        'remarks',
        'freeDaysCash',
        'freeDaysCredit',
        'showInAppointment',
        'showInRegistration',
        'userCode',
        'licenseNo',
        'regNo',
        'idCardNo',
        'idType',
        'nationality',
        'sortOrder',
        'scheduleInterval',
        'roomNo',
        'freeVisits',
        'defaultRate',
        'minDescPercent',
        'minDescAmt',
        'maxDescPercent',
        'maxDescAmt',
        'speciality',
        'consultantType',
    ];
    

    /**
     * Automatically convert these columns to the right PHP type
     * when we read them from the database.
     */
    protected $casts = [
        'dob' => 'date',
        'showInAppointment' => 'boolean',
        'showInRegistration' => 'boolean',
    ];
     public static function addConsultant($request)
    {
        $data = $request->except('_token');

        if (empty($data['doctorId'])) {
            $data['doctorId'] = 'DOC' . rand(1000, 9999);
        }

        $data['showInAppointment'] = $request->has('showInAppointment');
        $data['showInRegistration'] = $request->has('showInRegistration');

        return self::create($data);
    }
}
