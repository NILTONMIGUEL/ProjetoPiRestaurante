<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       
        
        // User::factory()->create([
        //     'name' => 'Nilton Sousa',
        //     'email' => 'nilton01@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'id_categoria' => 2,
        //     'id_cargo' => 4,
        // ]);

        //criando os dados sqlite3
        $this->call([
            //CategoriaSeeder::class,
            //CargosSeeder::class,
            //DescricaoSeeder::class,
            UsuarioSeeder::class,
        ]);

    }
}
