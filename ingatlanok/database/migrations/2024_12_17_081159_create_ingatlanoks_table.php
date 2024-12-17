<?php

use App\Models\Ingatlanok;
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
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->primary(['id', 'kategoria']);
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string('leiras');
            $table->date('hirdetesDatuma');
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
