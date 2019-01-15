<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'personal';

    /**
     * Run the migrations.
     * @table personal
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 25);
            $table->integer('departamento_id')->unsigned();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->char('nombramiento', 1)->nullable();
            $table->char('sexo', 1)->nullable();
            $table->string('correo')->nullable();

            $table->index(["id"], 'pk_personal_id');

            $table->index(["departamento_id"], 'fk_personal_departamento1_idx');

            $table->primary('id');

            $table->foreign('departamento_id', 'fk_personal_departamento1_idx')
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
