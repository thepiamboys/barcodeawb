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
        Schema::create('awbs', function (Blueprint $table) {
            $table->id();
            $table->string('airline'); // Kolom untuk airline
            $table->string('awbbc')->nullable(); // Kolom untuk barcode AWBBC
            $table->string('awb'); // Kolom untuk AWB
            $table->string('hawb')->nullable(); // Kolom untuk HAWB
            $table->string('destination'); // Kolom untuk destinasi
            $table->string('origin'); // Kolom untuk asal
            $table->decimal('total', 10, 2); // Kolom untuk total
            $table->timestamps(); // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awbs');
    }
};
