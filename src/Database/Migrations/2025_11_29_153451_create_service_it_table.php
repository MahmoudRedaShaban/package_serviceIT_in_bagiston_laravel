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
        Schema::create('service_it', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');

            $table->decimal('price',5,2);
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('duration')->nullable();
            $table->boolean('status')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_it');
    }
};
