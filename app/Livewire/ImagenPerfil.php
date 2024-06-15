<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImagenPerfil extends Component
{
    public $image;

    use WithFileUploads;

    protected $rules = ['image' => 'image|max:1024'];

    function subirImagen()
    {

        $data = $this->validate();

        $user = User::find(auth()->user()->id);
        $existingImage = public_path('storage/imagenes-perfil/' . $user->image);

        if ($user->image && File::exists($existingImage)) {
            unlink($existingImage);
        }

        $image = $this->image->store('public/imagenes-perfil');
        $data['image'] = str_replace('public/imagenes-perfil/', '', $image);

        $user->image = $data['image'];

        $user->save();

        session()->flash('mensaje', 'La imagen se ha cargado correctamente');

        return redirect()->route('dashboard');
    }

    public function render()
    {
        // dd(auth()->user()->id);
        return view('livewire.imagen-perfil');
    }
}
