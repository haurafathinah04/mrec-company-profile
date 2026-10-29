<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('highlight')->after('judul')->nullable(); // Ringkasan singkat
            $table->text('isi')->after('highlight')->nullable();     // Konten/isi lengkap blog
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['highlight', 'isi']);
        });
    }
};