<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimasidetailmodelTagmodelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animasidetailmodel_tagmodel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('animasidetailmodel_id');
            $table->integer('tagmodel_id');
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
        Schema::dropIfExists('animasidetailmodel_tagmodel');
    }
}
