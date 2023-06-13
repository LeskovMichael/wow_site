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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('likes')->default(0);
            $table->timestamps();

            $table->index('blog_category_id', 'blog_category_idx');
            $table->foreign('blog_category_id', 'blog_category_fk')
                ->on('blog_categories')->references('id');

            $table->index('user_id', 'user_idx');
            $table->foreign('user_id', 'user_fk')
                ->on('users')->references('id');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
