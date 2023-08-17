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
            $table->string('title')->index();
            $table->string('slug')->index();
            $table->string('excerpt')->index();
            $table->longText('body')->index();
            $table->boolean('status_id')->constrained()->default(1);
            $table->foreignId('user_id')->constrained()->index();
            $table->foreignId('category_id')->constrained()->index();
            $table->foreignId('level_id')->constrained()->index();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
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
