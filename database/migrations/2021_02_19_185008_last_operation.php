<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LastOperation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_operation', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('type', ['buy', 'sell']);
            $table->string('coin_name');
            $table->string('value');
            $table->float('unit_value');
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
        //
    }
}
