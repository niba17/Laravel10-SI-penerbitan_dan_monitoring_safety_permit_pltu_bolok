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
        Schema::create('ptw_desctription_ptw_isolation_method', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->primary();
            $table->uuid('ptw_description_uuid')->nullable();
            $table->uuid('ptw_isolation_method_uuid')->nullable();
            $table->string('isolation_by');
            $table->string('isolation_signature_date');
            $table->string('area');
            $table->string('restoration_by');
            $table->string('restoration_signature_date');
            $table->string('pmt_by');
            $table->string('pmt_signature_date');
            $table->timestamps();

            $table->foreign('ptw_description_uuid', 'fk_ptw_description')
                ->references('uuid')
                ->on('ptw_descriptions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ptw_isolation_method_uuid', 'fk_ptw_isolation_method')
                ->references('uuid')
                ->on('ptw_isolation_methods')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptw_desctription_ptw_isolation_method');
    }
};
