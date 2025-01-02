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
        Schema::create('abiturients', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('Answer_a');
            $table->string('Answer_b');
            $table->string('Answer_c');
            $table->string('Answer_d');
            $table->string('Answer_t');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abiturients');
    }
};
