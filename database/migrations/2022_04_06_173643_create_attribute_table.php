<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('ref');
            $table->tinyInteger('status');
            $table->text('origin');
            $table->text('collection');
            $table->text('glass');
            $table->text('dial_color');
            $table->text('moverment');
            $table->text('power');
            $table->text('material');
            $table->text('waterproof');
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
        Schema::dropIfExists('attribute');
    }
}
