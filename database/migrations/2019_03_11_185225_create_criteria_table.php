<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('indicator_id')->unsigned();
            $table->integer('competency_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('factor')->nullable();
            $table->string('evidence')->nullable();
            $table->integer('percent')->nullable();
            $table->string('type', 3)->nullable();
            $table->index(["group_id"], 'fk_criterion_group1_idx');
            $table->index(["indicator_id"], 'fk_criterion_indicator1_idx');
            $table->index(["competency_id"], 'fk_criterion_competency1_idx');
            $table->foreign('indicator_id', 'fk_criterion_indicator1_idx')
                ->references('id')->on('indicators')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('competency_id', 'fk_criterion_competency1_idx')
                ->references('id')->on('competencies')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('group_id', 'fk_criterion_group1_idx')
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
        Schema::dropIfExists('criteria');
    }
}
