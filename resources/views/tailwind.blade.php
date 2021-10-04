@extends('layouts.web')

@section('content')

<div class="px-2 mb-3 bg-secondary text-black flex justify-between items-center">
    <div>
        <img src="{{ asset('images/logo-bitmedia-02.png') }}" class="h-8 mx-auto">
    </div>
    <div class="text-2xl">&equiv;</div>
</div>

<div class="mx-4 md:w-1/2 md:flex md:bg-gray-300 md:rounded-lg">
    <div class="">
        <img class="md:w-full rounded-lg" src="https://images.unsplash.com/photo-1603739903239-8b6e64c3b185?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="">
    </div>
    <div class="relative shadow-lg bg-gray-300 md:bg-transparent rounded-lg -mt-2 mx-2 p-2">
        <h2 class="text-2xl tracking-tight font-semibold uppercase text-gray-800 md:text-lg">musica ligera</h2>
        <p class="text-gray-700 leading-snug tracking-tighter">El disco de musica suave y contemporanea, ideal para tiempos de cuarentena.</p>
        <div class="text-gray-600 font-semibold text-sm mt-2">3.99 USD</div>
        <div class="text-yellow-600 text-xs mt-2">&starf; &starf; &starf; &starf; &star; / 36 Reseñas</div>
    </div>
</div>

@endsection