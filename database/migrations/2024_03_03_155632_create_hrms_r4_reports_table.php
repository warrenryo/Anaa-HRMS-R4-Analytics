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
        Schema::create('hrms_r4_reports', function (Blueprint $table) {
            $table->id();
            $table->string('report_name');//name of the repport
            $table->string('description');//name of the repport
            $table->string('ratings_report');
            $table->string('employees_report');
            $table->string('sales_report');
            $table->string('inventory_report');
            $table->string('feedback_report');
            $table->string('financial_report');
            $table->string('status_report');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hrms_r4_reports');
    }
};
