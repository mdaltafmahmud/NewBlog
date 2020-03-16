<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'Name', 'Department', 'Roll','Age',
    ];
}
