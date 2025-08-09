<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('statuses', function (Blueprint $table) {
      $table->id();
      $table->string('ss');
      $table->string('name')->unique();
      $table->string('slug')->unique();
      $table->string('bg');
      $table->string('text');
      $table->text('description');
      $table->string('url', 7)->unique();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('statuses');
  }
};
