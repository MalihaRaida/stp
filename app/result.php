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
        'q1',
        'q2',
        'q3',
        'q4',
        'mid',
        'final',
        'grade',
        'semester',
        'department'
    ];

     public $timestamps = false;
}
