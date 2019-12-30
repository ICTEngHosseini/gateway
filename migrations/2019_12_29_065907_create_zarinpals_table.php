<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZarinpalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zarinpals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merchant-id')->nullable()->default('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx');
            $table->string('type')->nullable()->default('zarin-gate'); // Types: [zarin-gate || normal]
            $table->string('callback-url')->nullable();
            $table->string('server')->nullable()->default('germany'); // Servers: [germany || iran || test]
            $table->string('email')->nullable()->default('email@gmail.com');
            $table->string('mobile')->nullable()->default('09xxxxxxxxx');
            $table->string('description')->nullable()->default('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zarinpals');
    }
}
