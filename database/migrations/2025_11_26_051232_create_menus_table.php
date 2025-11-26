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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // название блюда
            $table->decimal('price', 8, 2); // цена (8 цифр, 2 после запятой)
            $table->integer('weight')->nullable(); // вес в граммах
            $table->json('nutritional_value')->nullable(); // пищевая ценность
            $table->text('composition'); // состав блюда
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
