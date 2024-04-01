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
        Schema::create('ptw_ptw_description', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('ptw_uuid')->nullable();
            $table->uuid('ptw_description_uuid')->nullable();
            $table->timestamps();

            $table->foreign('ptw_uuid')
                ->references('uuid')
                ->on('ptws')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ptw_description_uuid')
                ->references('uuid')
                ->on('ptw_descriptions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptw_ptw_description');
    }
};
