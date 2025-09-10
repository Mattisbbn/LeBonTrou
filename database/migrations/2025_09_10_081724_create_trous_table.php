<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trous', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('depth'); 
            $table->float('volume');
            $table->string('location');
            $table->float('diameter');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trous');
    }
};