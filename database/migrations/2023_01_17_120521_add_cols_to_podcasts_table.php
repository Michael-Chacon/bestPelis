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
        Schema::table('podcasts', function (Blueprint $table) {
            $table->text('url');
            $table->text('description');
            $table->string('status', 2);
            $table->float('score');
            $table->integer('chapters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('podcasts', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->dropColumn('description');
            $table->dropColumn('status');
            $table->dropColumn('score');
            $table->dropColumn('chapters');
        });
    }
};
