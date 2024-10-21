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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->integer('pot_id');
            $table->integer('league_id')->unsigned()->default(1);
            $table->string('club_name');
            $table->string('club_logo');
            $table->string('stadium_name')->nullable();
            $table->float('coeffs');
            $table->boolean('is_drawn')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
