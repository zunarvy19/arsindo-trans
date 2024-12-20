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
        Schema::create('detail_mobils', function (Blueprint $table) {
            
            $table->id();
            $table->string('ukuran');
            $table->string('mobil');
            $table->string('foto');
            $table->integer('kursi');
            $table->integer('pintu');
            $table->integer('bags');
            $table->enum('transmisi', ['Automatic', 'Manual']);
            $table->decimal('harga', 10, 2);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_mobils');
    }
};
