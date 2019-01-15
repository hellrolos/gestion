<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtemaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'subtema';

    /**
     * Run the migrations.
     * @table subtema
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('tema_id')->unsigned();
            $table->string('indice', 15)->nullable();
            $table->string('nombre')->nullable();

            $table->index(["tema_id"], 'fk_subtema_tema1_idx');

            $table->unique(["tema_id", "indice"], 'tema_id_UNIQUE');


            $table->foreign('tema_id', 'fk_subtema_tema1_idx')
                ->references('id')->on('tema')
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
