<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('student_id', 15);
            $table->integer('group_id')->unsigned();
            $table->boolean('runaway')->nullable();
            $table->index(["group_id"], 'fk_schedule_group1_idx');
            $table->index(["student_id"], 'fk_schedule_student1_idx');
            $table->unique(["student_id", "group_id"], 'student_id_UNIQUE');
            $table->foreign('student_id', 'fk_schedule_student1_idx')
                ->references('id')->on('students')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('group_id', 'fk_schedule_group1_idx')
                ->references('id')->on('groups')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
