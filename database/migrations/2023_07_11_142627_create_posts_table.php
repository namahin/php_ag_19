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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image',1000);
            $table->string('content', 10000);
            $table->unsignedBigInteger('user_id');
            // Relationship with the "id" column of the "users" table
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('category_id');
            // Relationship with the "id" column of the "categories" table
            $table->foreign('category_id')->references('id')->on('categories');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
