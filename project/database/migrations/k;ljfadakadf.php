<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentBalsheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_balsheets', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('agent_id')->references('agent_id')->on('agents');
            $table->string('agent_name');
            $table->integer('agent_balance');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_balsheets');
    }
}
