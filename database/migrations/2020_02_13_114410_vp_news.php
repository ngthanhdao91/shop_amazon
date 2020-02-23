<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_news', function (Blueprint $table) {
            $table->bigIncrements('new_id');
            $table->string('new_title');
            $table->string('new_slug');
            $table->text('new_summary');   //tom tat
            $table->text('new_description');
            $table->string('new_img');
            $table->tinyInteger('new_featured');   //noi bat
            $table->integer('new_view')->default(0);    //luot xem
            $table->tinyInteger('new_status');
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
        Schema::dropIfExists('vp_news');
    }
}
