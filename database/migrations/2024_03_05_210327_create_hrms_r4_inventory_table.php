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
        Schema::create('hrms_r4_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('r4_category_name');
            $table->string('r4_item_name');
            $table->string('r4_quantity');
            $table->string('r4_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hrms_r4_inventory');
    }
};
