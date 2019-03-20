<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('period_id')->unsigned();
            $table->string('employee_id', 25);
            $table->integer('plan_id')->unsigned();
            $table->string('group', 5)->nullable();
            $table->boolean('approved')->nullable();
            $table->integer('capacity')->nullable();
            $table->index(["period_id"], 'fk_group_period1_idx');
            $table->index(["employee_id"], 'fk_group_employee1_idx');
            $table->index(["plan_id"], 'fk_group_asignatura_reticula1_idx');
            $table->unique(["period_id", "employee_id", "group", "plan_id"], 'group1_UNIQUE');
            $table->foreign('period_id', 'fk_group_period1_idx')
                ->references('id')->on('periods')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('employee_id', 'fk_group_employee1_idx')
                ->references('id')->on('employees')
                ->onDelete('no action')
                ->onUpdate('cascade');
            $table->foreign('plan_id', 'fk_group_plan1_idx')
                ->references('id')->on('plans')
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
        Schema::dropIfExists('groups');
    }
}
