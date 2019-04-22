<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdonnancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('consultation_id')->unsigned();
            $table->foreign('consultation_id')->references('id')->on('consultations')->onDelete('cascade');
            $table->text('prescription');
            $table->date('date_ordonnance');
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
        Schema::dropIfExists('ordonnances');
    }
}
