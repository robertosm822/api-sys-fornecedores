# api-sys-fornecedores
API para Consulta e Castro de Fornecedores

## Dependências em Ambiente de Desenvolvimento
   - Git Instalado;
   - Composer (gerenciador de pacotes PHP);
   - PHP versão mínima 7.3;
## Instalar dependência para a API responder sem problemas nos CORs dos Navegadores
   - https://packagist.org/packages/barryvdh/laravel-cors
   - Comando: composer require fruitcake/laravel-cors
   Isso garante a API responder para os sites ou aplicativos mobile.

## Criando projeto Laravel Atualizado
  - Comando: composer create-project laravel/laravel api-fornecedores

## Criando a estrura de Model e Migração ORM para o Banco de dados
  (Observação Importante: Models devem ser no singular)
  - Comando: php artisan make:model Models\Fornecedor -m
  Editar arquivo de model e de migration.

## Executar migração de dados
  - Comando: php artisan migrate
