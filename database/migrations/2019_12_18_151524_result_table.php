<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            //
            $table->string('course',20);
            $table->year('result_year');
            $table->unsignedBigInteger('student_id');
            $table->decimal('attend',4,2);
            $table->decimal('q1',4,2);
            $table->decimal('q2',4,2);
            $table->decimal('q3',4,2);
            $table->decimal('q4',4,2);
            $table->decimal('mid',4,2);
            $table->decimal('final',5,2);
            $table->char('grade',2);
            $table->string('semester');
                   
        });



         Schema::table('result', function (Blueprint $table) {
            //
            $table->primary(['course','result_year']);

            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('result', function (Blueprint $table) {
            //
            Schema::dropIfExists('result');
        });
    }
}
