<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::enableForeignKeyConstraints();

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseName');
            $table->integer('courseCode');
            $table->integer('courseOccupied')->nullable();
            $table->integer('courseUnit');
            $table->string('courseType');

            $table->unsignedInteger('deptID');
            $table->foreign('deptID')->references('id')->on('department');

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
        Schema::dropIfExists('course');
    }
}
