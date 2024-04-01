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
        Schema::create('forms', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_uuid')->nullable();
            $table->uuid('jsa_safety_permit_uuid')->nullable();
            $table->uuid('person_group_uuid')->nullable();
            $table->string('to_carry_out_work');
            $table->string('unit_territory');
            $table->string('start_date');
            $table->string('finish_date');
            $table->string('start_time');
            $table->string('finish_time');
            $table->string('job_base_number');
            $table->string('company_or_field');
            $table->string('delay_start_time');
            $table->string('delay_start_date');
            $table->string('delay_finish_time');
            $table->string('delay_excuse');
            $table->string('additional_note');
            $table->string('approve_start_competent_person');
            $table->string('approve_start_production_supervisor');
            $table->string('approve_start_job_user');
            $table->uuid('approve_start_job_field');
            $table->string('clearance_competent_person');
            $table->string('clearance_production_supervisor');
            $table->string('clearance_job_user');
            $table->uuid('clearance_job_field');
            $table->string('third_party_date');
            $table->string('third_party_time');
            $table->string('third_party_person');
            $table->string('cancellation_competent_person');
            $table->string('cancellation_production_supervisor');
            $table->string('cancellation_job_user');
            $table->string('cancellation_job_user_field');
            $table->timestamps();

            $table->foreign('jsa_uuid')
                ->references('uuid')
                ->on('jsas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('jsa_safety_permit_uuid')
                ->references('uuid')
                ->on('jsa_safety_permits')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('person_group_uuid')
                ->references('uuid')
                ->on('jsa_person_groups')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
