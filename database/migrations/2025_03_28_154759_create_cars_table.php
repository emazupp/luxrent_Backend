<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /** * Run the migrations. */

    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string("model");
            $table->year("year");
            $table->text("description")->nullable();
            $table->string("transmission");
            $table->string("fuel_type");
            $table->integer("seats");
            $table->integer("doors");
            $table->string("color")->nullable();
            $table->integer("horsepower")->nullable();
            $table->integer("engine_size")->nullable();
            $table->decimal("price_per_day", 10, 2);
            $table->boolean("is_available")->default(true);
            $table->timestamps();
        });
    }


    /** * Reverse the migrations. */

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
