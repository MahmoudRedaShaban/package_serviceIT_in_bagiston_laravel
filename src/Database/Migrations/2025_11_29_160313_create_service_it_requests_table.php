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
        Schema::hasTable('service_it_requests') || Schema::create('service_it_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id_service')->index();
            $table->unsignedInteger('id_service_it')->index();

            $table->unsignedInteger('order_id')->index()->nullable();
            $table->json('requirements')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('delivery_date');
            $table->text('notes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_it_requests');
    }
};
