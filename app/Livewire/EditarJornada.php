<?php

namespace App\Livewire;

use App\Models\Color;
use App\Models\Jornada;
use Carbon\Carbon;
use Livewire\Component;

class EditarJornada extends Component
{
    public $jornada_id;
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

    public function mount(Jornada $jornada)
    {
        $this->jornada_id = $jornada->id;
        $this->jornada = $jornada->jornada;
        $this->equipo_contrario = $jornada->equipo_contrario;
        $this->color = $jornada->color_id;
        $this->goles_favor = $jornada->goles_favor;
        $this->goles_contra = $jornada->goles_contra;
        $this->fecha = Carbon::parse($jornada->fecha)->format('Y-m-d');;
    }

    public function editarVacante()
    {
        $data = $this->validate();

        $jornada = Jornada::find($this->jornada_id);

        $jornada->jornada = $data['jornada'];
        $jornada->equipo_contrario = $data['equipo_contrario'];
        $jornada->color_id = $data['color'];
        $jornada->goles_favor = $data['goles_favor'];
        $jornada->goles_contra = $data['goles_contra'];
        $jornada->fecha = $data['fecha'];

        $jornada->save();

        session()->flash('mensaje', 'Has modificado la jornada de manera correcta');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        $colores = Color::all();
        return view('livewire.editar-jornada', [
            'colores' => $colores
        ]);
    }
}
