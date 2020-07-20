<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'João',
            'secondName' => 'Camargo de Almeida',
            'email' => 'joaocamargo06@gmail.com',
            'phone' => '15996012923',
            'password' => '123'
        ]);
    }
}
