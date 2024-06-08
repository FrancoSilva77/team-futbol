<?php

namespace App\Livewire;

use App\Models\Color;
use Livewire\Component;

class CrearJornada extends Component
{

    public $jornada;
    public $equipo_contrario;
    public $color;
    public $goles_favor;
    public $goles_contra;
    public $fecha;

    protected $rules = [
        'jornada' => 'required|integer',
        'equipo_contrario' => 'required|string',
        'color' => 'required',
        'goles_favor' => 'required|integer',
        'goles_contra' => 'required|integer',
        'fecha' => 'required|string'
    ];

    public function crearVacante()
    {
        $data = $this->validate();
    }

    public function render()
    {
        $colores = Color::all();
        return view('livewire.crear-jornada', [
            'colores' => $colores
        ]);
    }
}
