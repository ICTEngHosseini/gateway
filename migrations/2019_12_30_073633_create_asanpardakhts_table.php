<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsanpardakhtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asanpardakhts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('merchantId')->nullable();
            $table->string('key')->nullable();
            $table->string('iv')->nullable();
            $table->string('merchantConfigId')->nullable();
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
        Schema::dropIfExists('asanpardakhts');
    }
}
