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
        Schema::create('formfillups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('emgMobile');
            $table->string('mobile');
            $table->string('father');
            $table->string('fatherWork');
            $table->string('mother');
            $table->string('motherWork');
            $table->string('address');
            $table->string('date');
            $table->string('week');
            $table->tinyInteger('one');
            $table->tinyInteger('two');
            $table->tinyInteger('three');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formfillups');
    }
};
