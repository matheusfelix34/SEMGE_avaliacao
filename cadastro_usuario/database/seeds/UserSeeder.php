<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        DB::table('users')->insert([
            'name'=>'Doulgas',
            'email'=>'doulgas@gmail.com',
            'password'=>'123456',
            'cpf'=>'067.987.456-56',
            'birth_date'=>'1999-07-11',
            'telefone1'=>'(67) 3116-2647',
            'telefone2'=>'(67) 3787-4379',
            'perfil'=>'Operário',
            'endereco'=>'Avenida Teles',
            'complemento'=>'Casa',
            'numero'=>'5',
            'cidade'=>'Salvador',
            'estado'=>'Bahia',
            'pais'=>'Brasil',
            'cep'=>'47555999',
        ]); 

        DB::table('users')->insert([
            'name'=>'Renato',
            'email'=>'renato@gmail.com',
            'password'=>'123456',
            'cpf'=>'296.264.040-00',
            'birth_date'=>'2000-08-22',
            'telefone1'=>'(82) 2074-7596',
            'telefone2'=>'(82) 3116-2647',
            'perfil'=>'Admin',
            'endereco'=>'Avenida Manuel Vaz',
            'complemento'=>'Apartamento 22',
            'numero'=>'100',
            'cidade'=>'Recife',
            'estado'=>'Pernambuco',
            'pais'=>'Brasil',
            'cep'=>'40320800',
        ]); 

        DB::table('users')->insert([
            'name'=>'Carlos',
            'email'=>'carlos@gmail.com',
            'password'=>'123456',
            'cpf'=>'967.169.240-00',
            'birth_date'=>'1998-07-13',
            'telefone1'=>'(24) 3960-4543',
            'telefone2'=>'(24) 3081-0953',
            'perfil'=>'Supervisor',
            'endereco'=>'Rua Angelino',
            'complemento'=>'Casa',
            'numero'=>'13',
            'cidade'=>'Natal',
            'estado'=>'Rio Grande do Norte',
            'pais'=>'Brasil',
            'cep'=>'13042820',
        ]); 

       
    }
}
