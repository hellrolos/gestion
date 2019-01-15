<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'grupo';

    /**
     * Run the migrations.
     * @table grupo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('periodo_id')->unsigned();
            $table->string('personal_id', 25);
            $table->integer('plan_id')->unsigned();
            $table->string('grupo', 5)->nullable();
            $table->boolean('aprobado')->nullable();
            $table->integer('capacidad')->nullable();

            $table->index(["periodo_id"], 'fk_grupo_periodo1_idx');

            $table->index(["personal_id"], 'fk_grupo_personal1_idx');

            $table->index(["plan_id"], 'fk_grupo_asignatura_reticula1_idx');

            $table->unique(["periodo_id", "personal_id", "grupo", "plan_id"], 'periodo_idperiodo_UNIQUE');


            $table->foreign('periodo_id', 'fk_grupo_periodo1_idx')
                ->references('id')->on('periodo')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('personal_id', 'fk_grupo_personal1_idx')
                ->references('id')->on('personal')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('plan_id', 'fk_grupo_asignatura_reticula1_idx')
                ->references('id')->on('plan')
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
