<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CourseRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registration', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('student_id');
            $table->string('semester');
            $table->year('enroll_year');
            $table->string('course',20);
            
        });


        Schema::table('course_registration', function (Blueprint $table) {
            $table->primary(['student_id','semester','enroll_year']);

            $table->foreign('student_id')->references('id')->on('users');
                
            $table->foreign('course')->references('course_code')->on('course_tech');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_registration', function (Blueprint $table) {
            //
            Schema::dropIfExists('course_registration');
        });
    }
}
