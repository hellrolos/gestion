<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriterioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'criterio';

    /**
     * Run the migrations.
     * @table criterio
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('indicador_id')->unsigned();
            $table->integer('competencia_id')->unsigned();
            $table->integer('grupo_id')->unsigned();
            $table->string('factor')->nullable();
            $table->string('evidencia')->nullable();
            $table->integer('porcentaje')->nullable();
            $table->string('tipo', 3)->nullable();

            $table->index(["grupo_id"], 'fk_criterio_grupo1_idx');

            $table->index(["indicador_id"], 'fk_criterio_indicador1_idx');

            $table->index(["competencia_id"], 'fk_criterio_competencia1_idx');


            $table->foreign('indicador_id', 'fk_criterio_indicador1_idx')
                ->references('id')->on('indicador')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('competencia_id', 'fk_criterio_competencia1_idx')
                ->references('id')->on('competencia')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('grupo_id', 'fk_criterio_grupo1_idx')
                ->references('id')->on('grupo')
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
