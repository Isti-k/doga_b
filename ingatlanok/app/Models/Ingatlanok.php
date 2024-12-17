<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingatlanok extends Model
{
    protected $fillable=[
        'id',
        'kategoria',
        'leiras',
        'hirdetesDatuma',
        'tehermentes',
        'ar',
        'kepUrl'
    ];
}
