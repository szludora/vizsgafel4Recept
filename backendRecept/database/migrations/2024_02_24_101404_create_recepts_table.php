<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kat_id")->references("id")->on("kategorias");
            $table->string("nev");
            $table->string("leiras");
            $table->string("kep_eleresi_ut");
            $table->date("datum")->default(DB::raw('CURRENT_DATE'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
