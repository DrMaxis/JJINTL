<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('model')->unique();
            $table->string('sku')->unique();
            $table->string('details')->nullable();
            $table->integer('shipping_weight')->nullable();
            $table->integer('box_length')->nullable();
            $table->integer('box_width')->nullable();
            $table->integer('box_height')->nullable();
            $table->text('description');
            $table->boolean('featured')->default(false);
            $table->boolean('new')->default(false);
            $table->string('image')->nullable();
            $table->longText('banner_image')->nullable();
            $table->longText('images')->nullable();
            $table->string('category')->nullable();
            $table->string('color')->nullable();
            $table->text('instructions')->nullable();
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
        Schema::dropIfExists('products');
    }
}
