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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();


            //columns for trains table 
            $table->string('train_company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->string('departure_time', 50);
            $table->string('arrival_time', 50);
            $table->integer('train_code')->unique();
            $table->integer('train_cars');
            $table->boolean('is_on_time')->default(true);
            $table->boolean('is_cancelled')->default(false);

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
