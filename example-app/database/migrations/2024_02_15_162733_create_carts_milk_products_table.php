<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('carts_milk_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carts_id');
            $table->unsignedBigInteger('milk_products_id');
            $table->unsignedTinyInteger('quantity');

            $table->foreign('carts_id')
                ->references('id')
                ->on('carts')
                ->cascadeOnDelete();
            $table->foreign('milk_products_id')
                ->references('id')
                ->on('milk_products')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts_milk_products');
    }
};
