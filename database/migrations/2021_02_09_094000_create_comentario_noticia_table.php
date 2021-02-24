<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('comentario_noticia', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('comentario');
            $table->unsignedInteger('idUsu');
            $table->unsignedInteger('idNot');
            $table->timestamps();
           
        });

         Schema::table('comentario_noticia' , function(Blueprint $table){
            $table->foreign('idNot')->references('idNot')
                ->on('noticias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

         Schema::table('comentario_noticia' , function(Blueprint $table){
            $table->foreign('idUsu')->references('idUsu')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
 }        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_noticia');
    }
}
