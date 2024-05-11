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
        Schema::create('students', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('beasiswa_id')->nullable();
            $table->unsignedBigInteger('docs_id')->nullable();
            $table->string('nama');
            $table->string('jurusan');
            $table->string('jk');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('kota');
            $table->string('phone');
            $table->string('prodi');
            $table->string('tahunMasuk');
            $table->string('semester');
            $table->string('tahunAjaran');
            $table->string('ipk');
            $table->string('ayah');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('ibu');
            $table->string('profesi');
            $table->string('gaji');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('beasiswa_id')->references('id')->on('beasiswas');
            $table->foreign('docs_id')->references('id')->on('docs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['docs_id']);
            $table->dropColumn('docs_id');
        });
    }
};
