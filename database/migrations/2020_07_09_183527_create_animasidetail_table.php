<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimasidetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animasidetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('alternativetitle');
            $table->text('description');
            $table->string('image');
            $table->integer('rating');
            $table->integer('voter');
            $table->string('showtime');
            $table->string('status');
            $table->integer('year');
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
        Schema::dropIfExists('animasidetail');
    }
}
