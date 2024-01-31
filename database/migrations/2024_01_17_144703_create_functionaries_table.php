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
        Schema::create('functionaries', function (Blueprint $table) {
            $table->id();
            $table->string('surnames',45);
            $table->string('names',45);
            $table->integer('age');
            $table->foreignId('gender_id')->constrained();
            $table->integer('identity_document');
            $table->integer('credential');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('promo_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->foreignId('rank_id')->constrained();
            $table->foreignId('dependency_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('functionaries');
    }
};
