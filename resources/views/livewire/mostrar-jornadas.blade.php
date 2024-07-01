<div class="">

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($jornadas as $jornada)
            <div class="p-6 text-gray-900 bg-white border-b border-gray-200">
                <div class="flex justify-around items-center gap-2 mx-auto">

                    <div class="flex flex-col w-1/3 items-center justify-center">
                        @if ($jornada->user->image)
                            <img src="{{ asset('storage/imagenes-perfil/' . $jornada->user->image) }}"
                                alt="{{ 'Imagen del equipo ' . $jornada->user->name }}"
                                class="w-12 h-12 rounded-full object-cover object-center">
                        @endif
                        <p class="text-center font-bold"> {{ $jornada->user->name }}</p>
                        <p class="font-bold text-2xl">{{ $jornada->goles_favor }}</p>
                    </div>

                    <p class="font-bold text-xl w-1/3 text-center">vs</p>

                    <div class="flex flex-col justify-around items-center w-1/3">
                        <div :style="{ backgroundColor: '{{ $jornada->color->hex_code }}' }"
                            class="w-12 h-12 rounded-full border-2 border-black"></div>
                        <p class="text-center">{{ $jornada->equipo_contrario }}</p>
                        <p class="font-bold text-2xl">{{ $jornada->goles_contra }}</p>
                    </div>

                </div>


                <div class="mt-5 flex flex-col items-center">
                    <h3>Jornada: {{ $jornada->jornada }}</h3>
                    <p>Fecha: {{ $jornada->fecha->locale('es_ES')->isoFormat('dddd D \\d\\e MMMM \\d\\e\\l Y') }}</p>
                </div>
                <div class="flex justify-center mt-2 gap-3">
                    <a href="{{ route('jornada.edit', $jornada->id) }}"
                        class="bg-yellow-400 py-2 items-center text-center px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Editar
                    </a>
                    <button wire:click="$dispatch('mostrarAlerta', { jornada_id:{{ $jornada->id }} })"
                        class="bg-red-600 py-2 items-center text-center px-4 rounded-lg text-white text-xs font-bold uppercase">
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">Registra tu primer resultado</p>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $jornadas->links() }}
    </div>

</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('mostrarAlerta', ({
            jornada_id
        }) => {
            Swal.fire({
                title: 'Eliminar Jornada',
                text: "Una jornada eliminada no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('eliminarJornada', {
                        jornada: jornada_id
                    })

                    Swal.fire(
                        'Se elimino la jornada',
                        'Eliminada Correctamente',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
