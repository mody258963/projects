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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price')->default(0.00);
            $table->integer('weight');
            $table->integer('quantity');
            $table->string('image');
            $table->boolean('is_paid')->default(0);
            $table->bigInteger('code');
            $table->enum('status',['arrived','in_progress','accept waiting for payment','rejected','panding'])->default('in_progress');
            $table->string('link');
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
