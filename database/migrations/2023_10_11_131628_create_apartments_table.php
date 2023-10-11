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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('room');
            $table->unsignedTinyInteger('bed');
            $table->unsignedTinyInteger('bathroom');
            $table->boolean('shared_bathroom')->nullable();
            $table->string('address', 128);
            $table->string('lat', 50);
            $table->string('lon', 50);
            $table->boolean('visible')->nullable();
            $table->string('name', 64);
            $table->unsignedDecimal('price', $precision = 6, $scale = 2);
            $table->unsignedDecimal('square_meter');
            $table->text('description')->nullable();
            $table->string('cover_img', 2048);
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
       
    }
};
