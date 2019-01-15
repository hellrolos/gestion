<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuenteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'fuente';

    /**
     * Run the migrations.
     * @table fuente
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->string('asignatura_id', 15);
            $table->string('nombre')->nullable();
            $table->integer('fecha')->nullable();
            $table->string('edicion', 20)->nullable();
            $table->string('editorial')->nullable();
            $table->string('autor')->nullable();

            $table->index(["asignatura_id"], 'fk_fuente_asignatura1_idx');

            $table->index(["grupo_id"], 'fk_fuente_grupo1_idx');


            $table->foreign('grupo_id', 'fk_fuente_grupo1_idx')
                ->references('id')->on('grupo')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('asignatura_id', 'fk_fuente_asignatura1_idx')
                ->references('id')->on('asignatura')
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
