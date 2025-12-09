<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\descricao;

class DescricaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        descricao::insert([
           [ 'nome' => 'Disponível',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nome' => 'Ocupado',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nome' => 'Em Limpeza',
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);
    }
}
