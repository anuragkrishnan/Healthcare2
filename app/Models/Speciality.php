<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $table = 'speciality';
    protected $fillable = [
        'speciality_short_code',
        'speciality_name',
        'status'
    ];
}
