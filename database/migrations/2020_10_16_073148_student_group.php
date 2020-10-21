<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_student', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('student_id');
            $table->integer('group_id');
            $table->timestamp();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_group', function (Blueprint $table) {
            //
        });
    }
}
