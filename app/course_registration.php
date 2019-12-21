<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_registration extends Model
{
    protected $table = 'course_registration';
    
    protected $fillable = [
    	'id',
        'student_id',
        'semester',
        'enroll_year',
        'course',
    ];
    public $timestamps = false;
}
