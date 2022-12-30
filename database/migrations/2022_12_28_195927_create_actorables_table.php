<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actorables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actorable_id');
            $table->string('actorable_type');
            $table->unsignedBigInteger('actor_id')->nullable();
            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('set null'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actorables');
    }
};
