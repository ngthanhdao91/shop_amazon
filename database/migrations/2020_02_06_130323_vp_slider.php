<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_slider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slid_img');
            $table->string('slid_title');
            $table->text('slid_description');
            $table->tinyInteger('slid_status');
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
        Schema::dropIfExists('vp_slider');
    }
}
