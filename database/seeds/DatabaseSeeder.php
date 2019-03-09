<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    


    public function run()
    {   
    
        User::create([
            'cpf' => '11122233362', 
            'nameuser' => 'Administrador',
            'services' => '', 
            'phone' => '359999999', 
            'birth' => '1996-10-06', 
            'gender' => 'M', 
            'email' => 'admin@sistema.com.br',
            'login' => 'admin', 
            'nivel' => 'Administrador',
            'password' => env('PASSWORD_HASH') ? bcrypt('12345678') : '12345678', 
        ]);

        User::create([
            'cpf' => '11122233361', 
            'nameuser' => 'Suporte',
            'services' => '', 
            'phone' => '359999999', 
            'birth' => '1996-10-06', 
            'gender' => 'M', 
            'email' => 'suporte@sistema.com.br',
            'login' => 'suporte', 
            'nivel' => 'Suporte',
            'password' => env('PASSWORD_HASH') ? bcrypt('12345678') : '12345678', 
        ]);

        User::create([
            'cpf' => '11122233363', 
            'nameuser' => 'Criador de Conteúdo',
            'services' => '', 
            'phone' => '359999999', 
            'birth' => '1996-10-06', 
            'gender' => 'M', 
            'email' => 'criador@sistema.com.br',
            'login' => 'criador', 
            'nivel' => 'Criador',
            'password' => env('PASSWORD_HASH') ? bcrypt('12345678') : '12345678', 
        ]);

        User::create([
            'cpf' => '11122233364', 
            'nameuser' => 'Cliente',
            'services' => '', 
            'phone' => '359999999', 
            'birth' => '1996-10-06', 
            'gender' => 'M', 
            'email' => 'cliente@sistema.com.br',
            'login' => 'cliente', 
            'nivel' => 'cliente',
            'password' => env('PASSWORD_HASH') ? bcrypt('12345678') : '12345678', 
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
