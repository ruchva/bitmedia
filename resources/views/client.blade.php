@extends('layouts.web')

@section('content')
    <div class="text-center my-4 mb-6">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">bitmedia monitoreo</h1>
        <h2 class="text-xl text-gray-600">La primera plataforma de monitoreo de anuncios publicitarios y medios de comunicacion.</h2>
    </div>

    <div class="grid grid-cols-3 gap-4">
        
        <!-- COMPONENTE LIVEWIRE PARA EL PLUGIN ACTIVMAP -->
        <livewire:activ-map>

        <div class="text-gray-700 col-span-2">           
            <!-- DATOS CLIENTE -->
            <div class="flex mt-3">
                <img src="{{ $client->avatar }}" 
                    class="h-10 w-10 rounded-full mr-2">
                <div>
                    <p class="text-gray-500 text-sm">{{ $client->name }}</p>
                    <p class="text-gray-500 text-xs">{{ $client->created_at->diffForHumans() }}</p>
                </div>
            </div>
            
            <!-- CLIENTES SIMILARES -->
            <div class="grid grid-cols-2 gao-4 my-8">
            @foreach($client->similar() as $client)
                <x-client-card :client="$client" />
            @endforeach
            </div>
        </div>

    </div>         

    <!-- COMPONENTE LIVEWIRE PARA LISTA DE CLIENTES -->
    <livewire:client-list>
@endsection