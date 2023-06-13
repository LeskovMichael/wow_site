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
        Schema::create('blog_post_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_post_id');
            $table->unsignedBigInteger('blog_tag_id');

            $table->index('blog_post_id', 'blog_post_idx');
            $table->foreign('blog_post_id', 'blog_post_fk')
                ->on('blog_posts')->references('id');

            $table->index('blog_tag_id', 'blog_tag_idx');
            $table->foreign('blog_tag_id', 'blog_tag_fk')
                ->on('blog_tags')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_tag');
    }
};
