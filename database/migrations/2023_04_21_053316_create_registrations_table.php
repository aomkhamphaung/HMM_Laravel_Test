<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')
                ->references('id')->on('programs')
                ->onDelete('cascade');

            $table->unsignedBigInteger('academic_id');
            $table->foreign('academic_id')
                ->references('id')->on('academics')
                ->onDelete('cascade');

            $table->string('name');
            $table->string('nrc');
            $table->date('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('profile');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('race');
            $table->string('marital_sts');
            $table->string('gender');

            $table->string('highest_edu');
            $table->string('high_school');
            $table->date('year');
            $table->string('degree');
            $table->string('uni_name');
            $table->date('start_date');
            $table->date('end_date');

            $table->string('work_experience');
            $table->string('exp_year');
            $table->string('current_position');
            $table->string('current_company');
            $table->date('working_start_date');

            $table->string('pre_position');
            $table->string('pre_company');
            $table->date('pre_start_date');
            $table->date('pre_end_date');

            $table->string('nrc_img');
            $table->string('grad_certi');
            $table->string('other_doc');
            $table->string('description');
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
        Schema::dropIfExists('registrations');
    }
}