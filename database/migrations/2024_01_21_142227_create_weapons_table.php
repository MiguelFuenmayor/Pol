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
        Schema::create('weapons', function (Blueprint $table) {
            $table->foreignId('functionary_id')->constrained();
            $table->string('weapon_type',45);
            $table->string('weapon_serial',45);
            $table->string('calibre',10);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
