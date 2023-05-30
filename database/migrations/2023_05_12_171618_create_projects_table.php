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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();    
            $table->unsignedBigInteger('CodeOrg');
           $table->foreign('CodeOrg')->references('id')->on('organismes');   
            $table->string('Nom');          
            $table->longText('Description');
            $table->date('Date_debut');
            $table->date('Date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
