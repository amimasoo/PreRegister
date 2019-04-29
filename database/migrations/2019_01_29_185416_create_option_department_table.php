<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_department', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('optionID');
            $table->foreign('optionID')->references('id')->on('option');

            $table->unsignedInteger('deptID');
            $table->foreign('deptID')->references('id')->on('department');

            $table->string('option_value');

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
        Schema::dropIfExists('option_department');
    }
}
