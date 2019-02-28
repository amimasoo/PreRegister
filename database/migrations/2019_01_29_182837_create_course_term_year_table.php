<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
Schema::enableForeignKeyConstraints();
class CreateCourseTermYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_term_year', function (Blueprint $table) {

            $table->unsignedInteger('courseID');
            $table->foreign('courseID')->references('id')->on('course');

            $table->unsignedInteger('term');
            $table->foreign('term')->references('term')->on('term_year');

            $table->unsignedInteger('year');
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
        Schema::dropIfExists('course_term_year');
    }
}
