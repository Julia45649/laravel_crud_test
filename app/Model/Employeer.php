<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employeer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'pname',
        'sname',
        'fname'
    ];

}
