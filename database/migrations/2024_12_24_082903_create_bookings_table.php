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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id')->nullable();
            $table->string('namalengkap');
            $table->date('tanggalpenjemputan');
            $table->time('waktupenjemputan');
            $table->date('tanggalpengantaran');
            $table->time('waktupengantaran');
            $table->string('identitas')->nullable();
            $table->boolean('tourguide')->default(false);
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('detail_mobils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
