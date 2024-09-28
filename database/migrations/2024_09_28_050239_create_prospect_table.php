<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Corre las migraciones de la tabla prospect.
     */
    public function up(): void
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->string('legal_name');
            $table->string('business_name');
            $table->string('rfc');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Anula las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospect');
    }
};
