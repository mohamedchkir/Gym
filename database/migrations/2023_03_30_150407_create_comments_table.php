<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("product_id")->nullable()->delete('cascade');
            $table->unsignedBigInteger("programme_id")->nullable()->delete('cascade');
            $table->foreign("programme_id")->references("id")->on("programmes");
            $table->foreign("product_id")->references("id")->on("products");
            $table->foreign("user_id")->references("id")->on("users");
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
        Schema::dropIfExists('comments');
    }
};
