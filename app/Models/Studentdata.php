<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentdata extends Model
{
    protected $fillable=[
        'regNo',
        'name',
        'email',
        'phone',
        //'phone'
    ];
}
