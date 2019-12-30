<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSadadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sadads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merchant')->nullable();
            $table->string('transactionKey')->nullable();
            $table->string('terminalId')->nullable();
            $table->string('callback-url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sadads');
    }
}
