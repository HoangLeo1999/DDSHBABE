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
        Schema::create('species', function (Blueprint $table) {
            $table->id();
            $table->string('loai_vn');
            $table->string('loai_latin');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->enum('status', ['active', 'inactive'])->default('active');
            
            // Foreign keys
            $table->unsignedBigInteger('genus_id');
            $table->unsignedBigInteger('family_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('phylum_id');

            // Add foreign key constraints
            $table->foreign('genus_id')->references('id')->on('genus')->onDelete('cascade');
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('phylum_id')->references('id')->on('phylums')->onDelete('cascade');

            // Add indexes
            $table->index(['genus_id', 'family_id', 'order_id', 'classes_id', 'phylum_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
