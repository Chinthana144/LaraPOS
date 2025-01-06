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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('ShopName');
            $table->string('AddressOne');
            $table->string('AddressTwo');
            $table->string('AddressThree');
            $table->string('Contact');
            $table->string('Email');
            $table->string('ShopLogo');
            $table->string('ReceiptLogo');
            $table->integer('stocktype_id');
            $table->integer('ShopStat');
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
        Schema::dropIfExists('shops');
    }
};
