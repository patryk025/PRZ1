<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;

    protected $fillable = [
        'Pytanie',
        'Odpowiedź',
        'Ilość punktów'
    ];

    protected $dates = [
        'data_rozpoczecia',
        'data_zakonczenia',
        'created_at',
        'updated_at',
    ];
}
