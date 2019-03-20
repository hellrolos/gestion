<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('departament_id')->unsigned();
            $table->string('name', 45)->nullable();
            $table->string('level', 3)->nullable();
            $table->string('acronym', 5)->nullable();
            $table->index(["departament_id"], 'fk_career_departament1_idx');
            $table->foreign('departament_id', 'fk_career_departament1_idx')
                ->references('id')->on('departaments')
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
        Schema::dropIfExists('careers');
    }
}
