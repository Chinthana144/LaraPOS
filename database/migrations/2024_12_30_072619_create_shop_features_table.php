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
        Schema::create('shop_features', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('is_wholesale');
            $table->tinyInteger('is_retail');
            $table->tinyInteger('is_inventory');
            $table->tinyInteger('is_minus');
            $table->tinyInteger('is_category');
            $table->tinyInteger('is_image');
            $table->tinyInteger('is_expire');
            $table->tinyInteger('is_supplier');
            $table->tinyInteger('is_service');
            $table->tinyInteger('is_salesman');
            $table->tinyInteger('is_expenses');
            $table->tinyInteger('is_customers');
            $table->tinyInteger('is_fixedprice');
            $table->tinyInteger('is_warranty');
            $table->tinyInteger('is_promotions');
            $table->tinyInteger('is_secondlanguage');
            $table->tinyInteger('is_labelprice');
            $table->tinyInteger('is_quotation');
            $table->tinyInteger('is_racks');
            $table->tinyInteger('is_color');
            $table->tinyInteger('is_size');
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->timestamps();

            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_features');
    }
};
