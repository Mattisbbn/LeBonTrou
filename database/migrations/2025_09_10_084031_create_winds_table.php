<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('winds', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp');
            $table->float('speed');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('winds');
    }
};
