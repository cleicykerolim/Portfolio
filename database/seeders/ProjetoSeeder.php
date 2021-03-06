<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Projeto;
use Illuminate\Database\Seeder;

class ProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        foreach (User::all() as $user){
            foreach (Categoria::where('user_id', $user->id)->get() as $categoria){
                Projeto::factory(1)->create([
                    'user_id' => $user->id,
                    'categorias_id' => $categoria->id,
                ]);
            }
        }
    }
}
