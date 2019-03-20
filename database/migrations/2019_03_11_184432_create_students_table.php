<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 15);
            $table->integer('career_id')->unsigned();
            $table->string('lastname')->nullable();
            $table->string('mother_lastname')->nullable();
            $table->string('names')->nullable();
            $table->string('status', 5)->nullable();
            $table->char('sex', 1)->nullable();
            $table->dateTime('birthdate')->nullable();
            $table->index(["id"], 'pk_student_id');
            $table->index(["career_id"], 'fk_student_career1_idx');
            $table->primary('id');
            $table->foreign('career_id', 'fk_student_career1_idx')
                ->references('id')->on('careers')
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
        Schema::dropIfExists('students');
    }
}
