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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');          // layihə adı
            $table->string('vessel_name')->nullable(); // gəmi adı
            $table->string('company_or_owner')->nullable(); // şirkət və ya sahibi
            $table->year('completion_year')->nullable();    // tamamlanma ili
            $table->string('dimensions')->nullable();       // ölçülər (məs: 100x20)
            $table->string('image_url')->nullable();        // şəkil yolu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
