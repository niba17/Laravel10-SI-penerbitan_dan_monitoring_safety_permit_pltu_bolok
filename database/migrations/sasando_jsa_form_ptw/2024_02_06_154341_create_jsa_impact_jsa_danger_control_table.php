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
        Schema::create('jsa_impact_jsa_danger_control', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_impact_uuid')->nullable();
            $table->uuid('jsa_danger_control_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_impact_uuid', 'fk_jsa_impact_1')
                ->references('uuid')
                ->on('jsa_impacts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('jsa_danger_control_uuid', 'fk_jsa_danger_control')
                ->references('uuid')
                ->on('jsa_danger_controls')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_impact_jsa_damage_control');
    }
};
