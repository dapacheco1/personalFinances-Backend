<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trx_types_id');
            $table->foreign('trx_types_id')->references('id')->on('trx_types');
            $table->unsignedBigInteger('providers_id');
            $table->foreign('providers_id')->references('id')->on('providers');
            $table->string('detail',255);
            $table->float('value');
            $table->string('currentMoneyLocation',50);
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
        Schema::dropIfExists('trxes');
    }
};
