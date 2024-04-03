<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vegetables_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->text('description');
            $table->string('image');
            $table->double('calories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vegetables_products');
    }
};
