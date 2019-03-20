<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reticles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('career_id')->unsigned();
            $table->integer('reticle');
            $table->string('oficial_key', 45)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('final_date')->nullable();
            $table->index(["career_id"], 'fk_reticle_career1_idx');
            $table->unique(["career_id", "reticle"], 'career_id_UNIQUE');
            $table->foreign('career_id', 'fk_reticle_career1_idx')
                ->references('id')->on('careers')
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
        Schema::dropIfExists('reticles');
    }
}
