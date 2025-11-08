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
        Schema::create('law_firms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('legal_category_id');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('website_link')->nullable();
            $table->timestamps();

            $table->foreign('legal_category_id')->references('id')->on('legal_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('law_firms');
    }
};
