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
        Schema::create('sustainabilities', function (Blueprint $table) {
            $table->id();
            $table->string('label_name');
            $table->char('eco_score', 1);
            $table->boolean('bio_certified');
            $table->char('animal_friendly_score', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sustainabilities');
    }
};
