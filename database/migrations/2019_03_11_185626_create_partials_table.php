<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('schedule_id')->unsigned();
            $table->integer('criterion_id')->unsigned();
            $table->integer('score')->nullable();
            $table->integer('oportunity')->nullable();
            $table->index(["criterion_id"], 'fk_partial_criterion1_idx');
            $table->index(["schedule_id"], 'fk_partial_schedule1_idx');
            $table->unique(["schedule_id", "criterion_id"], 'schedule_id_UNIQUE');
            $table->foreign('schedule_id', 'fk_partial_schedule1_idx')
                ->references('id')->on('schedules')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('criterion_id', 'fk_partial_criterion1_idx')
                ->references('id')->on('criteria')
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
        Schema::dropIfExists('partials');
    }
}
