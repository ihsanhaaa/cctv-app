<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('status_cctvs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cctv_id')->constrained('cctvs')->onDelete('cascade');
            $table->date('tgl_temuan')->nullable();
            $table->string('status_penanganan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_cctvs');
    }
};
