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
        Schema::create('dishes', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('ingredients')->nullable();
            $table->string('type')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('recommended')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
