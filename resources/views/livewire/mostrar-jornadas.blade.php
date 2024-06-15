<div class="">

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($jornadas as $jornada)
            <div class="p-6 text-gray-900 bg-white border-b border-gray-200">
                <div class="flex justify-around items-center gap-2 mx-auto">

                    <div class="flex flex-col w-1/3 items-center justify-center">
                        @if ($jornada->user->image)
                            <img src="{{ asset('storage/imagenes-perfil/' . $jornada->user->image) }}"
                                alt="{{ 'Imagen del equipo ' . $jornada->user->name }}" class="w-12 h-12 rounded-full">
                        @endif
                        <p class="text- font-bold"> {{ $jornada->user->name }}</p>
                        <p class="font-bold text-xl">{{ $jornada->goles_favor }}</p>
                    </div>

                    <p class="font-bold text-xl w-1/3 text-center">vs</p>

                    <div class="flex flex-col justify-around items-center w-1/3">
                        <div :style="{ backgroundColor: '{{ $jornada->color->hex_code }}' }"
                            class="w-12 h-12 rounded-full border-2 border-black"></div>
                        <p class="text-center ">{{ $jornada->equipo_contrario }}</p>
                        <p class="font-bold text-xl">{{ $jornada->goles_contra }}</p>
                    </div>

                </div>


                <div class="mt-5 flex flex-col items-center">
                    <h3>Jornada: {{ $jornada->jornada }}</h3>
                    <p>Fecha: {{ $jornada->fecha->locale('es_ES')->isoFormat('dddd D \\d\\e\\l Y') }}</p>
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
