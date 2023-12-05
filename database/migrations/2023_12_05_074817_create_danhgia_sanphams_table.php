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
        Schema::dropIfExists('danhgia_sanphams');

        Schema::create('danhgia_sanphams', function (Blueprint $table) {
            $table->increments('MADANHGIA');
            $table->unsignedInteger('MADH');
            $table->unsignedInteger('MAXDSP');
            $table->integer('SOLUONG_SAO');
            $table->longText('NOIDUNG_DANHGIA');
            $table->timestamp('updated_at')->nullable(); 
            $table->timestamp('created_at')->nullable();

            $table->foreign('MADH')->references('MADH')->on('donhangs');
            $table->foreign('MAXDSP')->references('MAXDSP')->on('sanpham_mausac_sizes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danhgia_sanphams');
    }
};
