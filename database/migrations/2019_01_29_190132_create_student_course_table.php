<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
Schema::enableForeignKeyConstraints();
class CreateStudentCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course', function (Blueprint $table) {
            $table->unsignedInteger('studentID')->nullable();
            $table->foreign('studentID')->references('id')->on('users');

            $table->unsignedInteger('courseID')->nullable();
            $table->foreign('courseID')->references('id')->on('course');

            $table->unsignedInteger('term')->nullable();
            $table->foreign('term')->references('term')->on('term_year');

            $table->unsignedInteger('year')->nullable();
            $table->foreign('year')->references('year')->on('term_year');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_course');
    }
}
