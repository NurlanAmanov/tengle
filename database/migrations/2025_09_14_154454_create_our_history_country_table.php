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
      Schema::create('our_history_country', function (Blueprint $t) {
            $t->id();
            $t->string('title');
            $t->text('content')->nullable(); // Quill HTML
            $t->string('image')->nullable(); // storage path
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_history_country');
    }
};
