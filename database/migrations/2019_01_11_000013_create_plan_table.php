<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'plan';

    /**
     * Run the migrations.
     * @table plan
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('asignatura_id', 15);
            $table->integer('reticula_id')->unsigned();
            $table->integer('creditos')->nullable();
            $table->integer('horas_practicas')->nullable();
            $table->integer('horas_teoricas')->nullable();

            $table->index(["reticula_id"], 'fk_asignatura_has_reticula_reticula1_idx');

            $table->index(["asignatura_id"], 'fk_asignatura_has_reticula_asignatura_idx');

            $table->unique(["asignatura_id", "reticula_id"], 'asignatura_idasignatura_UNIQUE');


            $table->foreign('asignatura_id', 'fk_asignatura_has_reticula_asignatura_idx')
                ->references('id')->on('asignatura')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('reticula_id', 'fk_asignatura_has_reticula_reticula1_idx')
                ->references('id')->on('reticula')
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
