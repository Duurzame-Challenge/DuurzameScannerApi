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
        Schema::create('product_alternative', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('alternative_id')->constrained('alternatives')->onDelete('cascade');
            $table->primary(['product_id', 'alternative_id']);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_alternative');
    }
};
