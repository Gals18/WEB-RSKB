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
        Schema::create('tabel_layanan', function (Blueprint $table) {
            $table->increments('id_layanan');
            $table->string('judul');
            $table->text('deskripsi');
            $table->unsignedInteger('added_by');
            $table->foreign('added_by')->references('id_user')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_layanan');
    }
};
