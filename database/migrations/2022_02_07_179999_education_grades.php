<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EducationGrades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_grades', function (Blueprint $table) 
        {   
            $table->increments('id');
            $table->integer('education_id')->unsigned();
            $table->foreign('education_id')
                ->references('id')
                ->on('education')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->integer('grades_id')->unsigned();
            $table->foreign('grades_id')
                ->references('id')
                ->on('grades')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_grades');
    }
}
