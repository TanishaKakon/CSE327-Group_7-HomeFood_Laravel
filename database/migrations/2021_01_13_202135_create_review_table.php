<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->integer("UserId");
            $table->integer("FoodId");
            $table->enum("Score",range(1,5));
            $table->string("Remarks");
            $table->timestamps();

            $table->foreign("UserId")->references("id")->on(users)->onDelete("cascade");
            $table->foreign("FoodId")->references("id")->on(food)->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review');
    }
}
