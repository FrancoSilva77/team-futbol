<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;

    protected $casts = ['fecha'=> 'date'];

    protected $fillable = [
        'jornada',
        'equipo_contrario',
        'color_id',
        'goles_favor',
        'goles_contra',
        'fecha',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
}
