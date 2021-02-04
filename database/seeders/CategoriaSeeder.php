<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user){
            $categorias = collect(['Design','Programador','Fotográfo','Pintor', 'arquiteto'])->random(3);
        
        foreach ($categorias as $categoria){
            Categoria::create([
                'tipo' => $categoria,
                'user_id' => $user->id,
                ]);
            } 
        }

    }
}
