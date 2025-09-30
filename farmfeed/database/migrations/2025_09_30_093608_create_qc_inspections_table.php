<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('qc_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('production_order_id')->nullable()->constrained('production_orders')->cascadeOnDelete();
            $table->date('inspection_date');
            $table->string('inspector_name');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('qc_inspections');
    }
};

