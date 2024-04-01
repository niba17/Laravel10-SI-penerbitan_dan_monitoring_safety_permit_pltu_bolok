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
        Schema::create('jsa_potential_hazard_jsa_impact', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_potential_hazard_uuid')->nullable();
            $table->uuid('jsa_impact_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_potential_hazard_uuid', 'fk_jsa_potential_hazard_1')
                ->references('uuid')
                ->on('jsa_potential_hazards')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('jsa_impact_uuid', 'fk_jsa_impact')
                ->references('uuid')
                ->on('jsa_impacts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_potential_hazard_jsa_impact');
    }
};
