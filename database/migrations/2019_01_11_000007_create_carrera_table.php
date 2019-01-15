<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'carrera';

    /**
     * Run the migrations.
     * @table carrera
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('departamento_id')->unsigned();
            $table->string('nombre', 45)->nullable();
            $table->string('nivel', 3)->nullable();
            $table->string('siglas', 5)->nullable();

            $table->index(["departamento_id"], 'fk_carrera_departamento1_idx');


            $table->foreign('departamento_id', 'fk_carrera_departamento1_idx')
                ->references('id')->on('departamento')
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
