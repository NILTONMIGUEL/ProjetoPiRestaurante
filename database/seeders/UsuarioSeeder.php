<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //cozinheiro , garcon , gerente , administrador
       User::insert([
           [ 'name' => 'Bárbara Dantas',
            'email' => 'barbara@gmail.com',
            'password' => bcrypt('123456'),
            'id_categoria' => 1,
            'id_cargo' => 4,
            'created_at' => now(),
            'updated_at' => now()
       ],
        [
            'name' => 'Bárbara Dantas',
            'email' => 'barbara01@gmail.com',
            'password' => bcrypt('123456'),
            'id_categoria' => 2,
            'id_cargo' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Léticia Widley',
            'email' => 'leticia@gmail.com',
            'password' => bcrypt('123456'),
            'id_categoria' => 1,
            'id_cargo' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Léticia Widley',
            'email' => 'leticia01@gmail.com',
            'password' => bcrypt('123456'),
            'id_categoria' => 2,
            'id_cargo' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Nilton Sousa',
            'email' => 'nilton@gmail.com',
            'password' => bcrypt('123456'),
            'id_categoria' => 1,
            'id_cargo' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Nilton Sousa',
            'email' => 'nilton01@gmail.com',
            'password' => bcrypt('123456'),
            'id_categoria' => 2,
            'id_cargo' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);
    }
}
