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
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('festival_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprimer la colonne 'festival_id' dans 'users'
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['festival_id']);
            $table->dropColumn('festival_id');
        });

        // Supprimer la table 'festivals'
        Schema::dropIfExists('festivals');
    }
};
