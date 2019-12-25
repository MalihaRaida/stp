<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_tech extends Model
{
    protected $table = 'course_tech';
    
    protected $fillable = [
        'id',
        'course_code',
        'course_name',
        'course_dept',
        'semester',
        'credit',
        'teacher_id',
        'teach_year',
    ];

     public $timestamps = false;
}
