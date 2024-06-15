<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Actualizar Imagen de perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Agrega imagen del escudo de tu equipo') }}
        </p>
    </header>

    <form class="mt-6 space-y-6" wire:submit.prevent='subirImagen'>
        <div>
            <x-input-label for="image" :value="__('Imagen')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" wire:model="image" accept="image/*" />

            @if (auth()->user()->image)
                <img src="{{ asset('storage/imagenes-perfil/' . auth()->user()->image) }}"
                    alt="{{ 'Imagen Equipo ' . auth()->user()->name }}">
            @endif

            <div class="my-5 w-80">
                @if ($image)
                    Imagen Nueva:
                    <img src="{{ $image->temporaryUrl() }}" alt="">
                @endif
            </div>

            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            @if (auth()->user()->image)
                <x-primary-button>{{ __('Actualizar') }}</x-primary-button>
            @else
                <x-primary-button>{{ __('Guardar') }}</x-primary-button>
            @endif
        </div>
    </form>
</section>
