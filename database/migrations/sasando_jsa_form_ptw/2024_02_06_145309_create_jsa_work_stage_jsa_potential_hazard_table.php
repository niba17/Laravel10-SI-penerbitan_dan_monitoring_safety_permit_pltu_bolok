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
        Schema::create('jsa_work_stage_jsa_potential_hazard', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_work_stage_uuid')->nullable();
            $table->uuid('jsa_potential_hazard_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_work_stage_uuid', 'fk_jsa_work_stage_1')
                ->references('uuid')
                ->on('jsa_work_stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('jsa_potential_hazard_uuid', 'fk_jsa_potential_hazard')
                ->references('uuid')
                ->on('jsa_potential_hazards')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_work_stage_jsa_potential_hazard');
    }
};
