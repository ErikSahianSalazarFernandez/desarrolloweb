<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupos;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupos::create([
            'nombre' => 'TICS',
            'clave' => 'IDGS-81',
        ]);

        Grupos::create([
            'nombre' => 'TICS',
            'clave' => 'IDGS82',
        ]);

        Grupos::create([
            'nombre' => 'TICS',
            'clave' => 'IDGS83',
        ]);

        Grupos::create([
            'nombre' => 'TICS',
            'clave' => 'IDGS84',
        ]);
    }
}
