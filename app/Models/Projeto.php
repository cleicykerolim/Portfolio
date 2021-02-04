<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'arquivo',
        'categorias_id',
        'user_id',

    ];

    public function categorias(){

    	return $this->belongsTo(Categoria::class);

    }
    public function users(){

    	return $this->belongsTo(User::class);

    }

}
