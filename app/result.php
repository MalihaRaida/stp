<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $table = 'result';
    
    protected $fillable = [
        'r_id',
        'course',
        'result_year',
        'attend',
        'student_id',
        'session',
    ];

     public $timestamps = false;
}
