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
        Schema::create('form_worker_form_skill_or_position', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('form_worker_uuid')->nullable();
            $table->uuid('form_skill_or_position_uuid')->nullable();
            $table->timestamps();

            $table->foreign('form_worker_uuid')
                ->references('uuid')
                ->on('form_workers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('form_skill_or_position_uuid', 'fk_form_skill_or_position')
                ->references('uuid')
                ->on('form_skill_or_positions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_worker_form_skill_or_position');
    }
};
