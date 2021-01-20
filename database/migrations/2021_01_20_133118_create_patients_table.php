<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name',)->nullable();
            $table->string('location',)->nullable();
            $table->string('case',)->nullable();
            $table->string('type',)->nullable();
            $table->string('responder',)->nullable();
            $table->string('responder_contact',)->nullable();
            $table->dateTime('responder_recieved',)->nullable();
            $table->string('status',)->nullable();
            $table->string('alpha',)->nullable();
            $table->time('time_of_call',)->nullable();
            $table->string('purpose',)->nullable();
            $table->string('age',)->nullable();
            $table->string('gender',)->nullable();
            $table->string('number_1085',)->nullable();
            $table->string('area',)->nullable();
            $table->string('refby',)->nullable();
            $table->string('number_1084',)->nullable();
            $table->string('profile',)->nullable();
            $table->string('tl',)->nullable();
            $table->string('td_1085',)->nullable();
            $table->text('cc',)->nullable();
            $table->string('tl_1085',)->nullable();
            $table->string('td',)->nullable();
            $table->string('kmr',)->nullable();
            $table->string('md',)->nullable();
            $table->string('crew',)->nullable();
            $table->string('rr_nurse',)->nullable();
            $table->string('rfb_no',)->nullable();
            $table->string('76_breakdown',)->nullable();
            $table->string('76_tb',)->nullable();
            $table->string('76_secured',)->nullable();
            $table->string('account',)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('patients');
    }
}
