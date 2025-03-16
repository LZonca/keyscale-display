<?php
// database/migrations/xxxx_create_cli_scores_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cli_scores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->default('Anonymous');
            $table->integer('score');
            $table->integer('letters')->nullable();
            $table->float('avg_time', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cli_scores');
    }
};
