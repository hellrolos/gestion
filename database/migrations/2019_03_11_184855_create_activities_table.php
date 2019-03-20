<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('competency_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('type', 3)->nullable();
            $table->text('description')->nullable();
            $table->index(["group_id"], 'fk_activity_group1_idx');
            $table->index(["competency_id"], 'fk_activity_competency1_idx');
            $table->foreign('competency_id', 'fk_activity_competency1_idx')
                ->references('id')->on('competencies')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('group_id', 'fk_activity_group1_idx')
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
        Schema::dropIfExists('activities');
    }
}
