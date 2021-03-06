<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
    	
    	'tipo',
        'user_id'

    ];

    public function users(){

    	return $this->belongsTo(User::class);
    	
    }

    public function produtos(){

    	return $this->hasMany(Produto::class);
 
    }
}

