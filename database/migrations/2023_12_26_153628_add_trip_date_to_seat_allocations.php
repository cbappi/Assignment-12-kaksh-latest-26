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
        Schema::table('seat_allocations', function (Blueprint $table) {
            $table->date('trip_date')->nullable()->after('trip_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seat_allocations', function (Blueprint $table) {
            $table->dropColumn('trip_date');
        });
    }
};
