<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('production_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_order_id')->nullable()->constrained('customer_orders');
            $table->string('status')->default('draft');
            $table->dateTime('planned_start')->nullable();
            $table->dateTime('planned_end')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('production_orders');
    }
};

