<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jsa_jsa_worker', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_uuid')->nullable();
            $table->uuid('jsa_worker_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_uuid')->references('uuid')->on('jsas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jsa_worker_uuid')->references('uuid')->on('jsa_workers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_jsa_worker');
    }
};
