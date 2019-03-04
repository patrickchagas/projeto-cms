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
            'cpf' => '11122233366', 
            'nameuser' => 'Patrick Chagas',
            'services' => 'Facebook, Instagram', 
            'phone' => '359999999', 
            'birth' => '1996-10-06', 
            'gender' => 'M', 
            'email' => 'patrick@sistema.com.br',
            'login' => 'patrick', 
            'password' => env('PASSWORD_HASH') ? bcrypt('123') : '123', 
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
