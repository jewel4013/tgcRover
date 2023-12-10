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
        Schema::create('bios', function (Blueprint $table) {
            $table->id('id');
            $table->string('father')->nullable();
            $table->string('fmobile')->nullable();
            $table->string('mother')->nullable();
            $table->string('mmobile')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->unsignedBigInteger('nid_dob')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('blood')->nullable();
            $table->string('religion')->nullable();
            $table->string('emergency')->nullable();
            $table->string('emobile')->nullable();
            $table->string('pe_distric')->nullable();
            $table->string('pe_thana')->nullable();
            $table->string('pe_postoffice')->nullable();
            $table->string('pe_village')->nullable();            
            $table->string('pa_distric')->nullable();
            $table->string('pa_thana')->nullable();
            $table->string('pa_postoffice')->nullable();
            $table->string('pa_village')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bios');
    }
};
