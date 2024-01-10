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
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('bo_vn');
                $table->string('bo_latin');
                $table->text('description')->nullable();
                $table->string('slug')->unique();
                $table->unsignedBigInteger('classes_id');
                $table->unsignedBigInteger('phylum_id');
                $table->enum('status', ['active', 'inactive'])->default('active');
                $table->timestamps();

                // Thêm foreign key constraints
                $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
                $table->foreign('phylum_id')->references('id')->on('phylums')->onDelete('cascade');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->index(['classes_id', 'phylum_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
