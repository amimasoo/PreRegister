<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
Schema::enableForeignKeyConstraints();

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->bigInteger('studentID')->nullable();
            $table->integer('entryYear')->nullable();
            $table->integer('takenUnitsNumber')->nullable();
            $table->string('confirmed')->nullable();

            $table->unsignedInteger('deptID')->nullable();

            $table->foreign('deptID')->references('id')->on('department');

            $table->integer('allowedUnit')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
