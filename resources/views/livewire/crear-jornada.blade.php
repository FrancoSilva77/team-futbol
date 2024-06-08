<form class="md:w-1/3 space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="jornada" :value="__('Número de Jornada')" />
        <x-text-input id="jornada" class="block mt-1 w-full" type="number" wire:model="jornada" :value="old('jornada')"
            autofocus />
        <x-input-error :messages="$errors->get('jornada')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="equipo_contrario" :value="__('Nombre del Equipo Contrario')" />
        <x-text-input id="equipo_contrario" class="block mt-1 w-full" type="text" wire:model="equipo_contrario"
            :value="old('equipo_contrario')" />
        <x-input-error :messages="$errors->get('equipo_contrario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="color" :value="__('Vestimenta del equipo contrario (Color Dominante)')" />

        <select wire:model="color" id="color"
            class="border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm w-full">
            <option value="">-- Seleccione --</option>

            @foreach ($colores as $color)
                <option value="{{ $color->id }}">{{ $color->color }}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('color')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="goles_favor" :value="__('Resultado (Goles a Favor)')" />
        <x-text-input id="goles_favor" class="block mt-1 w-full" type="number" wire:model="goles_favor"
            :value="old('goles_favor')" />
        <x-input-error :messages="$errors->get('goles_favor')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="goles_contra" :value="__('Resultado (Goles en Contra)')" />
        <x-text-input id="goles_contra" class="block mt-1 w-full" type="number" wire:model="goles_contra"
            :value="old('goles_contra')" />
        <x-input-error :messages="$errors->get('goles_contra')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="fecha" :value="__('Fecha de la jornada')" />
        <x-text-input id="fecha" class="block mt-1 w-full" type="date" wire:model="fecha" :value="old('fecha')" />
        <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
    </div>

    <x-primary-button>Crear Jornada</x-primary-button>
</form>
