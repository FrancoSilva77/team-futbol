<?php

namespace App\Livewire;

use App\Models\Color;
use Livewire\Component;

class CrearJornada extends Component
{

    public function render()
    {
        $colores = Color::all();
        return view('livewire.crear-jornada', [
            'colores' => $colores
        ]);
    }
}
