<?php

namespace App\Livewire;

use App\Models\Jornada;
use Livewire\Attributes\On;
use Livewire\Component;

class MostrarJornadas extends Component
{

    // protected $listeners = ['eliminarJornada'];
    #[On('eliminarJornada')]
    public function eliminarJornada(Jornada $jornada)
    {
        $jornada->delete();
    }

    public function render()
    {
        $jornadas = Jornada::with('user', 'color')->where('user_id', auth()->user()->id)->orderBy('jornada', 'desc')->paginate(4);

        return view('livewire.mostrar-jornadas', [
            'jornadas' => $jornadas
        ]);
    }
}
