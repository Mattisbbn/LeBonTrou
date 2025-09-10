<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trou_images', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('name')->nullable();
            $table->foreignId('trou_id')->constrained('trous')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trou_images');
    }
};