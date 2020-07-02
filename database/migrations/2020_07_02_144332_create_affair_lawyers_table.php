<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffairLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affair_lawyers', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedInteger('affair_id');
            $table->unsignedInteger('lawyer_id');
            $table->foreign('affair_id')->references('id')->on('affairs');
            $table->foreign('lawyer_id')->references('id')->on('lawyers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affair__lawyers');
    }
}
