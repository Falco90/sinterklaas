<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('wishlist_id');
            $table->string('item');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('wishlist_id')->references('id')->on('wishlists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
