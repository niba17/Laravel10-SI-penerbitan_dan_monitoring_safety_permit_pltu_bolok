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
        Schema::create('ptws', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_uuid')->nullable();
            $table->string('ptw_number');
            $table->string('location');
            $table->string('kks_equipment_number')->nullable();
            $table->string('job_name');
            $table->string('job_duration');
            $table->string('field_or_company');
            $table->boolean('working_party');
            $table->string('work_status');
            $table->string('certificate');
            $table->string('work_order_number');
            $table->string('approve_start_ptw_officer');
            $table->string('approve_start_maintenance_supervisor');
            $table->string('approve_start_date');
            $table->string('approve_start_time');
            $table->string('clearance_ptw_officer');
            $table->string('clearance_maintenance_supervisor');
            $table->string('third_party_person');
            $table->timestamps();

            $table->foreign('jsa_uuid')
                ->references('uuid')
                ->on('jsas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptws');
    }
};
