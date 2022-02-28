<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpost', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->longText('job_description');
            $table->string('salary');
            $table->string('commute_type');
            $table->string('contract_type');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // $table->integer('company_id')->unsigned();
            // $table->foreign('company_id')
            //     ->references('id')
            //     ->on('company')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobpost');
    }
}
