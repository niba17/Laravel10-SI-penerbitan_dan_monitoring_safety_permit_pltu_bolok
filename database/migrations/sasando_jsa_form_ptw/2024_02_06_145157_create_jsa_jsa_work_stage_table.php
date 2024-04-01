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
        Schema::create('jsa_jsa_work_stage', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_uuid')->nullable();
            $table->uuid('jsa_work_stage_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_uuid')->references('uuid')->on('jsas')->onDelete('cascade');
            $table->foreign('jsa_work_stage_uuid', 'fk_jsa_work_stage')
                ->references('uuid')
                ->on('jsa_work_stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_jsa_work_stage');
    }
};
