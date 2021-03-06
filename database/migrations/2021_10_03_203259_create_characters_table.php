<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("characters", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("nationality");
            $table->string("fight_style");
            $table->timestamp("birthdate");
            $table->string("slug");
            $table
                ->foreignId("user_id")
                ->constrained()
                ->onDelete("cascade");
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
        Schema::dropIfExists("characters");
    }
}
