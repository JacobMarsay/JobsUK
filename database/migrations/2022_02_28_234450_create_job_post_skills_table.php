<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_post_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_post_id')->unsigned();
            $table->foreign('job_post_id')
                ->references('id')
                ->on('jobpost')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->integer('skills_id')->unsigned();
            $table->foreign('skills_id')
                ->references('id')
                ->on('skills')
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
        Schema::dropIfExists('job_post_skills');
    }
}