<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affairs', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->string('name', 100);
            $table->unsignedDouble('cost');
            $table->date('start');
            $table->date('finish');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affairs');
    }
}
