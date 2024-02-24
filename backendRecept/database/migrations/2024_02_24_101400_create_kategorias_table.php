<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string("nev")->unique();
            $table->timestamps();
        });

        Kategoria::create([
            "nev" => "saláta"
        ]);
        Kategoria::create([
            "nev" => "édesség"
        ]);
        Kategoria::create([
            "nev" => "főétel"
        ]);
        Kategoria::create([
            "nev" => "leves"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
