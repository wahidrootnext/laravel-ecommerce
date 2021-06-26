<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('sku');
            $table->string('brand')->nullable();
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->double('weight', 8, 2)->nullable();
            $table->double('price', 8, 2);
            $table->double('sale_price', 8, 2)->nullable();
            $table->boolean('status');
            $table->boolean('featured');
            $table->integer('rating')->nullable();
            $table->foreignId('shop_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
