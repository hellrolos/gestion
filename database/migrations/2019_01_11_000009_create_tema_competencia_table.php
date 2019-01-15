<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemaCompetenciaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'tema_competencia';

    /**
     * Run the migrations.
     * @table tema_competencia
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('competencia_id')->unsigned();
            $table->integer('tema_id')->unsigned();

            $table->index(["competencia_id"], 'fk_tema_competencia_competencia1_idx');

            $table->index(["tema_id"], 'fk_tema_competencia_tema1_idx');

            $table->unique(["competencia_id", "tema_id"], 'competencia_idcompetencia_UNIQUE');


            $table->foreign('competencia_id', 'fk_tema_competencia_competencia1_idx')
                ->references('id')->on('competencia')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('tema_id', 'fk_tema_competencia_tema1_idx')
                ->references('id')->on('tema')
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
       Schema::dropIfExists($this->set_schema_table);
     }
}
