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
        Schema::table('bios', function (Blueprint $table) {
            $table->string('pe_division')->nullable()->after('emobile');
            $table->string('pa_division')->nullable()->after('pe_village');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bios', function (Blueprint $table) {
            $table->dropColumn('pe_division');
            $table->dropColumn('pa_division');
        });
    }
};
