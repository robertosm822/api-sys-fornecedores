<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj',20);
            $table->string('razao_social',100);
            $table->string('nome_responsavel', 100);
            $table->string('cpf_responsavel',20);
            $table->string('logradouro',150);
            $table->string('numero',20);
            $table->string('bairro',100);
            $table->string('cidade',100);
            $table->string('estado',100);
            $table->string('telefone',20);
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
        Schema::dropIfExists('fornecedores');
    }
}
