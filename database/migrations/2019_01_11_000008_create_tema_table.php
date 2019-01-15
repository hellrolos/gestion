<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'tema';

    /**
     * Run the migrations.
     * @table tema
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
            $table->integer('numero')->nullable();
            $table->string('nombre')->nullable();

            $table->index(["asignatura_id"], 'fk_tema_asignatura1_idx');

            $table->unique(["asignatura_id", "numero"], 'asignatura_id_UNIQUE');


            $table->foreign('asignatura_id', 'fk_tema_asignatura1_idx')
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
