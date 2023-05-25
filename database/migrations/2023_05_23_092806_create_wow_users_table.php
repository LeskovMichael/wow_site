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
        Schema::create('wow_users', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->unique()->nullable(false);
            $table->string('class')->nullable(false);
            $table->string('specialization')->nullable(false);
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wow_users');
    }
};
