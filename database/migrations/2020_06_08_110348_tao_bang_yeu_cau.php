<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangYeuCau extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeucau', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nguoiyeucau', 255);
            $table->integer('loaiyeucau_id');
            $table->integer('hinhthuc_id');
        });

        Schema::create('loaiyeucau', function (Blueprint $table) {
            $table->increments('loaiyeucau_id');
            $table->string('tenyeucau');
        });

        Schema::create('hinhthucyeucau', function (Blueprint $table) {
            $table->increments('hinhthuc_id');
            $table->string('hinhthuc');
        });

        Schema::create('phancap', function (Blueprint $table) {
            $table->increments('phancap_id');
            $table->string('chucvu');
        });

        Schema::create('phongban', function (Blueprint $table) {
            $table->increments('phongban_id');
            $table->string('tenphongban');
            $table->text('chucnang');
        });

        Schema::create('to', function (Blueprint $table) {
            $table->increments('to_id');
            $table->integer('phongban_id');
            $table->string('to');
            $table->text('nhiemvu');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yeucau');
    }
}
