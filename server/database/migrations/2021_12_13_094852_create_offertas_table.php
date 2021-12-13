<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offertas', function (Blueprint $table) {
            $table->id();
            $table->text("linguaggio");
            $table->text("icon_linguaggio");
            $table->text("nomeazienda");
            $table->float("ral");                        
            $table->text("experience");
            $table->text("location");
            $table->text("description");
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
        Schema::dropIfExists('offertas');
    }
}
