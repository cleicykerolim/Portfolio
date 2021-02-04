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
        foreach(User::all() as $user) {
        	Categoria::factory(2)->create([
        		// 'user_id' => $user->id
        	]);
        }
    }
}
