<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allproducts', function (Blueprint $table) {
          $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('description');
            $table->string('image');
            $table->integer('rate');
            $table->unsignedBigInteger('catid');
            $table->foreign('catid')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('allproducts');
    }
}
