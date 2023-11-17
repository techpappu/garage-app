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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('chassis_no', 200);
            $table->string('manufacturer', 200);
            $table->string('capacity', 20);
            $table->string('engine_manufacturer', 200);
            $table->string('engine_model', 200);
            $table->date('start_date');
            $table->string('status', 200);
            $table->date('next_maintenance_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
