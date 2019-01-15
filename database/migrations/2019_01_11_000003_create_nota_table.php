<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nota';

    /**
     * Run the migrations.
     * @table nota
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('emisor', 25)->nullable();
            $table->string('receptor', 25)->nullable();
            $table->string('tipo', 15)->nullable();
            $table->integer('tipo_id')->nullable();
            $table->string('estatus', 3)->nullable();
            $table->text('mensaje')->nullable();
            $table->integer('pertenece')->nullable();

            $table->unique(["emisor", "receptor", "tipo", "tipo_id"], 'emisor_UNIQUE');
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
