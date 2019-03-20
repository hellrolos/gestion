<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->integer('competency_id')->unsigned();
            $table->string('route')->nullable();
            $table->string('filename')->nullable();
            $table->dateTime('date')->nullable();
            $table->index(["competency_id"], 'fk_evidence_competency1_idx');
            $table->index(["group_id"], 'fk_evidence_group1_idx');
            $table->foreign('group_id', 'fk_evidence_group1_idx')
                ->references('id')->on('groups')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('competency_id', 'fk_evidence_competency1_idx')
                ->references('id')->on('competencies')
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
        Schema::dropIfExists('evidences');
    }
}
