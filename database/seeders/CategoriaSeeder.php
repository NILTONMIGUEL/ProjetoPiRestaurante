<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert([
            ['nome' => 'administrador',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nome' => 'Garçon',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nome' => 'Cliente',
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);
    }
}
