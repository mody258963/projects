<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('weight')->nullable();
            $table->decimal('price')->default(0.00);
            $table->string('link');
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_paid')->default(0);
            $table->string('description')->nullable();
            $table->bigInteger('code')->nullable();
            $table->integer('quantity')->nullable();
            $table->enum('status',['arrived','panding','accpted','rejected','will arrive soon','in_progress' ])->default('in_progress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
