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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('id'); 
            $table->string('name');
            $table->string('homepage')->nullable();
            $table->string('mypage')->nullable();
            $table->string('status')->nullable();
            $table->string('process')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('industry_id');
            

            // 外部キー制約(industriesテーブルとの紐付け)
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
