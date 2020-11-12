 <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis planes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="app">
                    <all-plans></all-plans>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="{{ asset('js/app.js') }}" defer></script>
