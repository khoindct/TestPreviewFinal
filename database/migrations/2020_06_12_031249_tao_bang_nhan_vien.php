<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangNhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->bigIncrements('nhanvien_id');
            $table->string('hoten');
            $table->string('gioitinh');
            $table->string('sodienthoai');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phongban_id');
            $table->integer('phancap_id');
            $table->string('to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
