<?php

use App\Models\Doctor;
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
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Doctor::class)->constrained()->cascadeOnDelete();
            $table->string('name')->unique();
            $table->string('experience');
            $table->string('url');
            $table->date('from');
            $table->date('to')->default('present');
            $table->string('issuer');
            $table->string('issuer_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specializations');
    }
};
