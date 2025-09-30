<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('qc_template_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qc_template_id')->constrained('qc_templates')->cascadeOnDelete();
            $table->string('parameter');
            $table->string('expected_value')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('qc_template_items');
    }
};

