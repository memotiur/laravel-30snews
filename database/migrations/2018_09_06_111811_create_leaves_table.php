<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('leave_id');
            $table->unsignedInteger('user_id');
            $table->string('applicant_leave_from');
            $table->string('applicant_leave_to');
            $table->integer('applicant_leave_duration');
            $table->text('applicant_leave_reason');
            $table->text('applicant_leave_type')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
