<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReticulaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'reticula';

    /**
     * Run the migrations.
     * @table reticula
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('carrera_id')->unsigned();
            $table->integer('reticula');
            $table->string('clave_oficial', 45)->nullable();
            $table->dateTime('fecha_inicio')->nullable();
            $table->dateTime('fecha_termino')->nullable();

            $table->index(["carrera_id"], 'fk_reticula_carrera1_idx');

            $table->unique(["carrera_id", "reticula"], 'carrera_id_UNIQUE');


            $table->foreign('carrera_id', 'fk_reticula_carrera1_idx')
                ->references('id')->on('carrera')
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
