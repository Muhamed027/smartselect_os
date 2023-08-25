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
            // $table->string('title_normalized')->virtualAs("regexp_replace(title,'[^A-Za-z0-9]','')")->index();
            $table->string('slug');
            $table->string('excerpt')->index();
            $table->longText('body')->index();
            // $table->longText('body_normalized')->virtualAs("regexp_replace(body,'[^A-Za-z0-9]','')")->index();
            $table->boolean('status_id')->constrained('statuses','id')->default(1);
            $table->foreignId('user_id')->constrained('users','id');
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
