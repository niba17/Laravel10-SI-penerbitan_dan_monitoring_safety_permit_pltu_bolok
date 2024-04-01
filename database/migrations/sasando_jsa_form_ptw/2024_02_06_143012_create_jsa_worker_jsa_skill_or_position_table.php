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
        Schema::create('jsa_worker_jsa_skill_or_position', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_worker_uuid')->nullable();
            $table->uuid('jsa_skill_or_position_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_worker_uuid')->references('uuid')->on('jsa_workers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jsa_skill_or_position_uuid', 'fk_jsa_worker_skill_position')
                ->references('uuid')
                ->on('jsa_skills_or_positions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_worker_jsa_skill_or_position');
    }
};
