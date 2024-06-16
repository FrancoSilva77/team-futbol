<?php

namespace App\Livewire;

use App\Models\Color;
use App\Models\Jornada;
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
        'jornada' => 'required|integer|min:1',
        'equipo_contrario' => 'required|string',
        'color' => 'required',
        'goles_favor' => 'required|integer|min:0',
        'goles_contra' => 'required|integer|min:0',
        'fecha' => 'required'
    ];

    public function crearJornada()
    {
        $data = $this->validate();

        Jornada::create([
            'jornada' => $data['jornada'],
            'equipo_contrario' => $data['equipo_contrario'],
            'color_id' => $data['color'],
            'goles_favor' => $data['goles_favor'],
            'goles_contra' => $data['goles_contra'],
            'fecha' => $data['fecha'],
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('mensaje', 'Se ha publicado el resultado de la jornada correctamente');

        return redirect()->route('dashboard');
    }

    public function render()
    {
        $colores = Color::all();
        return view('livewire.crear-jornada', [
            'colores' => $colores
        ]);
    }
}
