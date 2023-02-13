<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('celulas_oficiales', function (Blueprint $table) {
            $table->id();
            $table->text('anfitrion')->nullable();
            $table->text('ubicacion')->nullable();
            $table->enum('dia',['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'])->default('Miercoles');
            $table->string('telefono')->nullable();

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('celulas_oficiales');
    }
};
