<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentbalancesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentbalancesheets', function (Blueprint $table) {
                     
            $table->increments('id');
            //$table->foreign('agent_id')->references('agent_id')->on('agents');
            $table->string('user_name');
            $table->integer('user_balance');
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
        Schema::dropIfExists('agentbalancesheets');
    }
}
