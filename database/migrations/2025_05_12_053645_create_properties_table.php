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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('address');
            $table->string('city');
            $table->string('status');
            $table->string('monthly_price');
            $table->string('area_m2');
            $table->string('num_bedrooms');
            $table->string('num_bathrooms');
            $table->string('included_services');
            $table->string('publication_date');

              $table->unsignedBigInteger('user_id')->unique();
            
            $table->timestamps(); $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
