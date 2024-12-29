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
        Schema::table('detail_mobils', function (Blueprint $table) {
            $table->dropColumn(['bags', 'pintu', 'transmisi']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_mobils', function (Blueprint $table) {
            $table->integer('bags');
            $table->integer('pintu');
            $table->enum('transmisi', ['Automatic', 'Manual']);
        });
    }
};
