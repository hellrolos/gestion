<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject_id', 15);
            $table->integer('reticle_id')->unsigned();
            $table->integer('credits')->nullable();
            $table->integer('practical_hours')->nullable();
            $table->integer('theoretical_hours')->nullable();
            $table->index(["reticle_id"], 'fk_subject_has_reticle_reticle1_idx');
            $table->index(["subject_id"], 'fk_subject_has_reticle_subject_idx');
            $table->unique(["subject_id", "reticle_id"], 'subject_idsubject_UNIQUE');
            $table->foreign('subject_id', 'fk_subject_has_reticle_subject_idx')
                ->references('id')->on('subjects')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('reticle_id', 'fk_subject_has_reticle_reticle1_idx')
                ->references('id')->on('reticles')
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
        Schema::dropIfExists('plans');
    }
}
