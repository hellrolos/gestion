<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalParcialTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'cal_parcial';

    /**
     * Run the migrations.
     * @table cal_parcial
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('carga_horaria_id')->unsigned();
            $table->integer('criterio_id')->unsigned();
            $table->integer('calificacion')->nullable();
            $table->integer('oportunidad')->nullable();

            $table->index(["criterio_id"], 'fk_cal_parcial_criterio1_idx');

            $table->index(["carga_horaria_id"], 'fk_cal_parcial_carga_horaria1_idx');

            $table->unique(["carga_horaria_id", "criterio_id"], 'carga_horaria_id_UNIQUE');


            $table->foreign('carga_horaria_id', 'fk_cal_parcial_carga_horaria1_idx')
                ->references('id')->on('carga_horaria')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('criterio_id', 'fk_cal_parcial_criterio1_idx')
                ->references('id')->on('criterio')
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
