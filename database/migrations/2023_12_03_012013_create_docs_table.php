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
        Schema::create('docs', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key column named 'id'
            // $table->unsignedBigInteger('nim'); // Change to unsignedBigInteger for referencing
            $table->string('nama_file');
            $table->text('file')->nullable();
            $table->string('original_name')->nullable();
            $table->string('tipe');
            $table->timestamps();
            // $table->foreign('nim')->references('nim')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs');
    }
};
