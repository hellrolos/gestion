<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'alumno';

    /**
     * Run the migrations.
     * @table alumno
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 15);
            $table->integer('carrera_id')->unsigned();
            $table->string('apellido_p')->nullable();
            $table->string('apellido_m')->nullable();
            $table->string('nombres')->nullable();
            $table->string('estatus', 5)->nullable();
            $table->char('sexo', 1)->nullable();
            $table->dateTime('fecha_nac')->nullable();

            $table->index(["id"], 'pk_alumno_id');

            $table->index(["carrera_id"], 'fk_alumno_carrera1_idx');

            $table->primary('id');

            $table->foreign('carrera_id', 'fk_alumno_carrera1_idx')
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
