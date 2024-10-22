<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory; //tip

    protected $table = 'foods'; //název tabulky v databázi, se kterou je model spojený

    protected $fillable = [ // seznam atributů
        'name',
        'histamine_level',
        'category',
        'user_id'
    ];

    public function user() //vztah mezi Food a User - díky tomu každá potravina patří jednomu uživateli
    {
        return $this->belongsTo(User::class);
    }
}