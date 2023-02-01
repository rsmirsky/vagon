<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvalidPriceErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invalid_price_errors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('invalid_price_id');
            $table->foreign('invalid_price_id')
                ->references('id')->on('invalid_prices')->onDelete('cascade');
            $table->string('error');
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
        Schema::dropIfExists('invalid_price_errors');
    }
}
