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
        Schema::disableForeignKeyConstraints();

        Schema::create('tickets', function (Blueprint $table) {
          $table->id();
          $table->string('title');
          $table->string('description');
          $table->enum('status',['ASSEGNATO','IN LAVORAZIONE','CHIUSO']);
          $table->foreignId('category_id')->constrained();
          $table->foreignId('operator_id')->constrained();
          $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
