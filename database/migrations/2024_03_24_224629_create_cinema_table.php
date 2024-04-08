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
        Schema::create('cinema', function (Blueprint $table) {
            $table->id();
            $table->string("title")->visible();
            $table->string("director")->visible();
            $table->text("genre");
            $table->integer("date");
            $table->float("rating")->visible();
            $table->integer("duration");
            $table->string("synopsis");
            $table->text("studio")->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinema');
    }
};
