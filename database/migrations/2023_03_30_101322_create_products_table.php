<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("products", function (Blueprint $table) {
            $table->id();
            $table->string("no_item");
            $table->foreignId("id_kategori");
            $table->char("image")->nullable();
            $table
                ->string("size")
                ->nullable()
                ->default("-");
            $table
                ->string("size_stone")
                ->nullable()
                ->default("-");
            $table
                ->string("qty_stone")
                ->nullable()
                ->default("-");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("products");
    }
};
