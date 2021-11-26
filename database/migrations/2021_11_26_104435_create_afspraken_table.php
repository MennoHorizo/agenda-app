<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfsprakenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afspraken', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("title",2000);
            $table->string("description",5000);
            $table->string("location",2000);
            $table->string("color",200);
            $table->integer("start");
            $table->integer("end");
            $table->integer("made");
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
        Schema::dropIfExists('afspraken');
    }
}
