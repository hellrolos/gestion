<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtopics', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('topic_id')->unsigned();
            $table->string('index', 15)->nullable();
            $table->string('name')->nullable();
            $table->index(["topic_id"], 'fk_subtopic_topic1_idx');
            $table->unique(["topic_id", "index"], 'topic_id_UNIQUE');
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
        Schema::dropIfExists('subtopics');
    }
}
