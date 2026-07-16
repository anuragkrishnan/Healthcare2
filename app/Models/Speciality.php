<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    protected $table = 'speciality';
    protected $fillable = [
        'speciality_short_code',
        'speciality_name',
        'status'
    ];
}
