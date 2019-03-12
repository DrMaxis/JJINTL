<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('model')->unique()->nullable();
            $table->string('sku')->unique()->nullable();
            $table->string('color')->nullable();
            $table->string('details')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('new')->default(false);
            $table->integer('shipping_weight')->nullable();
            $table->integer('box_length')->nullable();
            $table->integer('box_width')->nullable();
            $table->integer('box_height')->nullable();
            $table->string('image')->nullable();
            $table->longText('images')->nullable();
            $table->longText('banner_image')->nullable();
            
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
        Schema::dropIfExists('variants');
    }
}
