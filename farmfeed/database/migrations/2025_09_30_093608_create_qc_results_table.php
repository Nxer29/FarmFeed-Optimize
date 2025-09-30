<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('qc_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qc_inspection_id')->constrained('qc_inspections')->cascadeOnDelete();
            $table->foreignId('qc_template_item_id')->constrained('qc_template_items')->cascadeOnDelete();
            $table->string('actual_value')->nullable();
            $table->boolean('is_pass')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('qc_results');
    }
};
