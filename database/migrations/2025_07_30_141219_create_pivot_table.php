<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('role_has_menu', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });

    Schema::create('role_has_submenu', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });

    Schema::create('role_has_permission', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('role_has_menu');
    Schema::dropIfExists('role_has_submenu');
    Schema::dropIfExists('role_has_permission');
  }
};
