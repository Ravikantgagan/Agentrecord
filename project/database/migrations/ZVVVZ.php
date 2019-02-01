<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('
            agents', function (Blueprint $table) {
            $table->increments('agent_id');
            $table->string('agent_name');
            $table->string('agent_address');
            $table->integer('agent_contact');
            $table->string('agent_type');
            //$table->integer('agent_balance');
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
        Schema::dropIfExists('agents');
    }
}
