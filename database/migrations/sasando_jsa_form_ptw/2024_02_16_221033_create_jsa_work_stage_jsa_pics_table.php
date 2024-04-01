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
        Schema::create('jsa_work_stage_jsa_pic', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('jsa_work_stage_uuid')->nullable();
            $table->uuid('jsa_pic_uuid')->nullable();
            $table->timestamps();

            $table->foreign('jsa_work_stage_uuid')
                ->references('uuid')
                ->on('jsa_work_stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('jsa_pic_uuid')
                ->references('uuid')
                ->on('jsa_pics')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa_work_stage_jsa_pic');
    }
};
