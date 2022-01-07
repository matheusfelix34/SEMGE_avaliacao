<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cpf');
            $table->date('birth_date');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('perfil');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->string('cep');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
