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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('lop_vn');
            $table->string('lop_latin');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('phylum_id');
            $table->foreign('phylum_id')->references('id')->on('phylums')->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
        Schema::table('classes', function (Blueprint $table) {
            $table->index(['phylum_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
