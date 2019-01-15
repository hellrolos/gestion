<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargaHorariaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'carga_horaria';

    /**
     * Run the migrations.
     * @table carga_horaria
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('alumno_id', 15);
            $table->integer('grupo_id')->unsigned();
            $table->boolean('desertor')->nullable();

            $table->index(["grupo_id"], 'fk_carga_horaria_grupo1_idx');

            $table->index(["alumno_id"], 'fk_carga_horaria_alumno1_idx');

            $table->unique(["alumno_id", "grupo_id"], 'alumno_id_UNIQUE');


            $table->foreign('alumno_id', 'fk_carga_horaria_alumno1_idx')
                ->references('id')->on('alumno')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('grupo_id', 'fk_carga_horaria_grupo1_idx')
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
