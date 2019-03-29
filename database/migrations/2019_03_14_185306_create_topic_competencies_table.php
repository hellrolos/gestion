<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicCompetenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_competencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competency_id')->unsigned();
            $table->integer('topic_id')->unsigned();
            $table->timestamps();
            $table->index(["topic_id"], 'fk_subtopic_topic1_idx');
            $table->index(["competency_id"], 'fk_criterion_competency1_idx');
            $table->unique(["competency_id", "topic_id"], 'topic_competencies1_UNIQUE');
            $table->foreign('competency_id', 'fk_criterion_competency1_idx')
                ->references('id')->on('competencies')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('topic_id', 'fk_subtopic_topic1_idx')
                ->references('id')->on('topics')
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
        Schema::dropIfExists('topic_competencies');
    }
}
