<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CategoriaProduto;

class CategoriaProdutosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaProduto::insert([
            ['nome' => "Entrada Principal",
            'created_at' => now(),
            'updated_at' => now()],
            ['nome' => "Sobremesa",
            'created_at' => now(),
            'updated_at' => now()],
            ['nome' => "Bebidas",
            'created_at' => now(),
            'updated_at' => now()],
        ]);
    }
}
