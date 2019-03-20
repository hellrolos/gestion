<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->string('subject_id', 15);
            $table->string('name')->nullable();
            $table->integer('date')->nullable();
            $table->string('edition', 20)->nullable();
            $table->string('editorial')->nullable();
            $table->string('author')->nullable();
            $table->index(["subject_id"], 'fk_source_subject1_idx');
            $table->index(["group_id"], 'fk_source_group1_idx');
            $table->foreign('group_id', 'fk_source_group1_idx')
                ->references('id')->on('groups')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('subject_id', 'fk_source_subject1_idx')
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
        Schema::dropIfExists('sources');
    }
}
