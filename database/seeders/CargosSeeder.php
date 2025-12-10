<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargos;
class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cargos::insert([
            ['nome' => 'Cozinheiro',
            'created_at' => now(),
            'updated_at' => now()
            ],
            ['nome' => 'Garçon',
            'created_at' => now(),
            'updated_at' => now()
            ],
            ['nome' => 'Gerente',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            ['nome' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now()
            ],      
        ]);
    }
}


//cozinheiro , garcon , gerente , administrador