<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('paths', function (Blueprint $table) {
      $table->id();
      $table->integer('sp');
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('url', 5)->unique();
      $table->unsignedInteger('views')->default(0);
      $table->foreignId('status_id')
        ->constrained('statuses')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->text('description')->nullable();
      $table->string('image')->nullable();
      $table->timestamps();

      $table->index(['status_id', 'sp', 'name']);
    });

    Schema::create('roadmaps', function (Blueprint $table) {
      $table->id();
      $table->foreignId('path_id')
        ->constrained('paths')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->integer('sr');
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('url', 5)->unique();
      $table->unsignedInteger('views')->default(0);
      $table->foreignId('status_id')
        ->constrained('statuses')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->text('description')->nullable();
      $table->string('image')->nullable();
      $table->timestamps();

      $table->index(['status_id', 'path_id', 'sr', 'name']);
    });

    Schema::create('playlists', function (Blueprint $table) {
      $table->id();
      $table->foreignId('roadmap_id')
        ->constrained('roadmaps')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->integer('spl');
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('url', 5)->unique();
      $table->unsignedInteger('views')->default(0);
      $table->foreignId('status_id')
        ->constrained('statuses')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->text('description')->nullable();
      $table->string('image')->nullable();
      $table->timestamps();

      $table->index(['status_id', 'roadmap_id', 'spl', 'name']);
    });

    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->foreignId('playlist_id')
        ->constrained('playlists')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->integer('sp');
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('excerpt');
      $table->text('content');
      $table->unsignedInteger('views')->default(0);
      $table->foreignId('status_id')
        ->constrained('statuses')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      $table->string('image')->nullable();
      $table->timestamps();

      $table->index(['status_id', 'playlist_id', 'sp', 'title']);
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('paths');
    Schema::dropIfExists('roadmaps');
    Schema::dropIfExists('playlists');
    Schema::dropIfExists('posts');
  }
};
