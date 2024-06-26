<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('cadastrar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <form action="/cadastrar" method="post">
                    @csrf
                <!-- Nome das cartas -->
                <div class="mt-4">
                <x-input-label for="nome" :value="__('Nome')" />
                <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autocomplete="nome" />
                <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                </div>
                <!-- Codigo das cartas -->
                <div class="mt-4">
                <x-input-label for="codigo" :value="__('Código')" />
                <x-text-input id="codigo" class="block mt-1 w-full" type="text" name="codigo" :value="old('codigo')" required autocomplete="codigo" />
                <x-input-error :messages="$errors->get('codigo')" class="mt-2" />
                </div>
                <!-- Nível das cartas -->
                <div class="mt-4">
                <x-input-label for="nivel" :value="__('Nivel')" />
                <x-text-input id="nivel" class="block mt-1 w-full" type="number" name="nivel" :value="old('nivel')" required autocomplete="nivel" />
                <x-input-error :messages="$errors->get('nivel')" class="mt-2" />
                </div>
                <!-- Data de lançamento das cartas -->
                <div class="mt-4">
                <x-input-label for="data" :value="__('Data')" />
                <x-text-input id="data" class="block mt-1 w-full" type="date" name="data" :value="old('data')" required autocomplete="data" />
                <x-input-error :messages="$errors->get('data')" class="mt-2" />
                </div>
                <!-- Atributo das cartas -->
                <div class="mt-4">
                <x-input-label for="atributo" :value="__('Atributo')" />
                <x-text-input id="atributo" class="block mt-1 w-full" type="text" name="atributo" :value="old('atributo')" required autocomplete="atributo" />
                <x-input-error :messages="$errors->get('atributo')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                    {{ __('cadastrar') }}
                    </x-primary-button>
                </div>    
        </div>
    </div>
</x-app-layout>
