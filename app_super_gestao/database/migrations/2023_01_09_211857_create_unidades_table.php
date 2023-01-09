<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

            //relacionamento com a tabela produtos
            Schema::table('produtos', function(Blueprint $table) {
                $table->unsignedBigInteger('unidade_id');
                $table->foreign('unidade_id')->references('id')->on('unidades');
            });
             //relacionamento com a tabela produtos_detalhes

             Schema::table('produtos_detalhes', function(Blueprint $table) {
                $table->unsignedBigInteger('unidade_id');
                $table->foreign('unidade_id')->references('id')->on('unidades');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        //relacionamento com a tabela produtos_detalhes
        Schema::table('produtos_detalhes', function(Blueprint $table){
           //remover forekey 
           $table->dropForeign('produtos_detalhes_unidade_id_foreign');           
           //relacionamento com a tabela produtos
           $table->dropColumn('unidade_id');
        }); 
        
        //relacionamento com a tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            //remover forekey 
            $table->dropForeign('produtos_unidade_id_foreign');           
            //relacionamento com a tabela produtos
            $table->dropColumn('unidade_id');
         });        

        Schema::dropIfExists('unidades');
    }
};
