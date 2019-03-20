<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject_id', 15);
            $table->integer('number')->nullable();
            $table->string('name')->nullable();
            $table->index(["subject_id"], 'fk_topic_subject1_idx');
            $table->unique(["subject_id", "number"], 'subject_id_UNIQUE');
            $table->foreign('subject_id', 'fk_topic_subject1_idx')
                ->references('id')->on('subjects')
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
        Schema::dropIfExists('topics');
    }
}
