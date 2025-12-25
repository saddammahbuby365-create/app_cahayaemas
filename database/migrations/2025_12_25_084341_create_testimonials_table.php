<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('foto')->nullable();
        $table->tinyInteger('rating')->default(5); // 1 - 5
        $table->text('pesan');
        $table->boolean('is_approved')->default(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
