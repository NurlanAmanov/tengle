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
  Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('section');             // "what_we_do" və ya "our_process"
            $table->string('title');               // Başlıq (Shipbuilding, Fabrication və s.)
            $table->string('icon')->nullable();    // ikon (fa-ship, fa-wrench və s.)
            $table->string('image')->nullable();   // şəkil yolu (process kartları üçün)
            $table->text('description');           // açıqlama mətni
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
