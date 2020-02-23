<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_name');
            $table->string('prod_slug');
            $table->integer('prod_price');
            $table->string('prod_img');
            $table->tinyInteger('prod_temperature');
            $table->tinyInteger('prod_stauts');
            $table->text('prod_description');
            $table->integer('prod_sugar');
            $table->integer('prod_caffeine');
            $table->integer('prod_calories');
            $table->tinyInteger('prod_featured');
            $table->integer('prod_cate')->unsigned();  //buoc la so nguyen
            $table->foreign('prod_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade'); //onDelete toan ven du lieu khi xoa thif xoa het
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
        Schema::dropIfExists('vp_products');
    }
}
