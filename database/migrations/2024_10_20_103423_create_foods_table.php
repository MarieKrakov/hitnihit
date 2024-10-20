<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('histamine_level');
            $table->string('category');
            $table->timestamps();
        });                
    }

    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
