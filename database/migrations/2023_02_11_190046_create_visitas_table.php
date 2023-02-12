<?php

use App\Models\Visita;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->text('observaciones')->nullable();
            $table->dateTime('fecha');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('celula_id');
            $table->enum('estatus',[Visita::NOVISITADO,Visita::VISITADO])->default(Visita::NOVISITADO);

            $table->foreign('celula_id')->references('id')->on('celulas_evangelisticas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('visitas');
    }
};
