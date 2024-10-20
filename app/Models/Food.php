<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    protected $fillable = [
        'name',
        'histamine_level',
        'category',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}