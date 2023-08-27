<?php

use App\Models\Blog\Status;
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
            $table->string('slug')->unique();
            $table->string('excerpt')->index();
            $table->longText('body')->index();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('status_id')->constrained('statuses','id');
            $table->foreignId('category_id')->constrained('categories','id');
            $table->foreignId('level_id')->constrained('levels','id');
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
