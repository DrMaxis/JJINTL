<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantProductLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_product_link', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merchant_id')->unsigned()->nullable();
            $table->foreign('merchant_id')->references('id')
                ->on('merchants')->onDelete('cascade');


                $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');

            $table->integer('link_id')->unsigned()->nullable();
            $table->foreign('link_id')->references('id')
                ->on('product_links')->onDelete('cascade');

           
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
        Schema::dropIfExists('merchant_product_link');
    }
}
