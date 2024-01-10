<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('genus', function (Blueprint $table) {
            $table->id();
            $table->string('chi_vn');
            $table->string('chi_latin');
            $table->text('description');
            $table->string('slug')->unique();
            $table->enum('status', ['active', 'inactive'])->default('active');
            // Khóa ngoại
            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('classes_id');
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
            $table->unsignedBigInteger('phylum_id');
            $table->foreign('phylum_id')->references('id')->on('phylums')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('genus', function (Blueprint $table) {
            $table->index(['family_id', 'order_id', 'classes_id', 'phylum_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genus');
    }
};
