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
        Schema::create('school_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('npsn')->unique()->nullable();
            $table->string('status')->nullable();
            $table->string('accreditation')->nullable();
            $table->string('principal_name')->nullable();
            $table->string('principal_nip')->nullable();
            $table->string('principal_message')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            $table->text('history')->nullable();
            $table->text('social_media')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_settings');
    }
};
