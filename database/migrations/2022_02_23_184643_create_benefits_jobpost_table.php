<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitsJobpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits_jobpost', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobpost_id')->unsigned();
            $table->foreign('jobpost_id')
                ->references('id')
                ->on('jobpost')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->integer('benefits_id')->unsigned();
            $table->foreign('benefits_id')
                ->references('id')
                ->on('benefits')
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
        Schema::dropIfExists('benefits_jobpost');
    }
}
