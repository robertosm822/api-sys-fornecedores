<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    //CRIAR O APONTAMENTO DOS CAMPOS DA PASTA NO BANCO DE DADOS
    protected $fillable = [
        'cnpj',
        'razao_social',
        'nome_responsavel',
        'cpf_responsavel',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'telefone'
    ];
    protected $table = 'fornecedores';
}
