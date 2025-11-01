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
        Schema::create('handmades', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('artisan'); 
            $table->decimal('price', 10, 2);
            $table->string('material');
            $table->string('image');
            $table->text('description'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_handmades');
    }
};
