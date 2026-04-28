<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->decimal('prix', 10, 2);
            $table->text('description');
            $table->integer('duree');
            $table->string('image')->nullable(); // ⬅️ Hadi hiya
            $table->foreignId('type_voyage_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};