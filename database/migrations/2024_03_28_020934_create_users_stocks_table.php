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
        Schema::create('users_stocks', function (Blueprint $table) {
            $table->id();
            // $table->integer('stockId');
            // stockIdに外部キー制約を追加
            $table->unsignedBigInteger('stockId');
            $table->foreign('stockId')->references('id')->on('stocks');
            // $table->integer('userId');
            // userIdに外部キー制約を追加
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_stocks');
    }
};
