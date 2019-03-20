<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('transmitter', 25)->nullable();
            $table->string('receiver', 25)->nullable();
            $table->string('type', 15)->nullable();
            $table->integer('type_id')->nullable();
            $table->string('status', 3)->nullable();
            $table->text('message')->nullable();
            $table->integer('belongs')->nullable();
            $table->unique(["transmitter", "receiver", "type", "type_id"], 'emisor_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
