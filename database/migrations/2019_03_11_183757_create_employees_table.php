<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 25);
            $table->integer('departament_id')->unsigned();
            $table->string('names')->nullable();
            $table->string('lastnames')->nullable();
            $table->char('comission', 1)->nullable();
            $table->char('sex', 1)->nullable();
            $table->string('mail')->nullable();
            $table->index(["id"], 'pk_employees_id');
            $table->index(["departament_id"], 'fk_employees_departaments1_idx');
            $table->primary('id');
            $table->foreign('departament_id', 'fk_employees_departaments1_idx')
                ->references('id')->on('departaments')
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
        Schema::dropIfExists('employees');
    }
}
