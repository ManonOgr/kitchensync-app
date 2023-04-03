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
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable(false);
            $table->boolean('online');
            $table->timestamps();

            //foreign key bookmarks
            $table->unsignedBigInteger('bookmark_id')->unique();
            $table->foreign('bookmark_id')->references('id')->on('bookmarks');

            //foreign key domains
            $table->unsignedBigInteger('domain_id')->index();
            $table->foreign('domain_id')->references('id')->on('domains');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
