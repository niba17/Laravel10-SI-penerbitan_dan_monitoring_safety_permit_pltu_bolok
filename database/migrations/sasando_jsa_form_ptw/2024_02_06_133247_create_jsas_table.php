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
        Schema::create('jsas', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->string('name');
            $table->string('job_base');
            $table->string('location');
            $table->uuid('person_group_uuid')->nullable();
            $table->string('start_date');
            $table->string('finish_date');
            $table->string('start_time');
            $table->string('finish_time');
            $table->string('jsa_creator');
            $table->string('jsa_creator_position');
            $table->string('jsa_supervisor_k3');
            $table->string('jsa_supervisor_k3_unit');
            $table->string('status');
            $table->timestamps();

            $table->foreign('person_group_uuid')->references('uuid')->on('jsa_person_groups')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsas');
    }
};
