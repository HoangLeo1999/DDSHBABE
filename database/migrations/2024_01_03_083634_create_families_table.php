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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('ho_vn');
            $table->string('ho_latin');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->enum('status', ['active', 'inactive']);
            $table->unsignedBigInteger('phylum_id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('order_id');

            // Add foreign key constraints
            $table->foreign('phylum_id')->references('id')->on('phylums')->onDelete('cascade');
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->timestamps();

            // Add indexes for foreign keys
            $table->index(['classes_id', 'phylum_id', 'order_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
