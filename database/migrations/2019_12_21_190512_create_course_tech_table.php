<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_tech', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code',20);
            $table->string('course_name');
            $table->string('course_dept',10);
            $table->string('semester');
            $table->decimal('credit',3,2);
            $table->unsignedBigInteger('teacher_id');
            $table->year('teach_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_tech');
    }
}
