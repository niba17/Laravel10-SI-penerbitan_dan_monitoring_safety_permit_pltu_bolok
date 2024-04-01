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
        Schema::create('form_form_description', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('form_uuid')->nullable();
            $table->uuid('form_description_uuid')->nullable();
            $table->timestamps();

            $table->foreign('form_uuid')
                ->references('uuid')
                ->on('forms')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('form_description_uuid')
                ->references('uuid')
                ->on('form_descriptions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_form_description');
    }
};
