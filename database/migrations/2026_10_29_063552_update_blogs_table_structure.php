<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Tambah kolom jika belum ada
            if (!Schema::hasColumn('blogs', 'highlight')) {
                $table->string('highlight')->nullable();
            }
            if (!Schema::hasColumn('blogs', 'isi')) {
                $table->text('isi')->nullable();
            }
            // Ubah kolom deskripsi jadi nullable agar tidak error jika kosong
            if (Schema::hasColumn('blogs', 'deskripsi')) {
                $table->text('deskripsi')->nullable()->change();
            }
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn(['highlight', 'isi']);
        });
    }
};