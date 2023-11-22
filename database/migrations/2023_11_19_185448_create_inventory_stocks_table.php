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
        Schema::create('inventory_stocks', function (Blueprint $table) {

            $table->id();
            $table->foreignId('inventory_item_id')->constrained('inventory_items')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cost_price')->nullable();
            $table->integer('retail_price');
            $table->integer('quantity');
            $table->string('supplier')->nullable();
            $table->timestamp('supply_date');
            $table->timestamp('expiry_date')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_stocks');
    }
};
