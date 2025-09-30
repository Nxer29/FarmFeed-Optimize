<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('inventory_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->constrained('warehouses');
            $table->string('type'); // in, out, transfer
            $table->string('reference')->nullable();
            $table->decimal('quantity', 12, 2);
            $table->string('unit');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('inventory_transactions');
    }
};

