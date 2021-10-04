@extends('layouts.web')

@section('content')
    <div class="h-64 bg-cover bg-no-repeat bg-center" style="background-image: url('https://images.unsplash.com/photo-1594968973184-9040a5a79963?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=900&q=80');">
    
    </div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-jet-welcome />
                </div>
            </div>
        </div>

        <div class="md:flex py-12">
            <div class="mx-4 md:w-1/2 md:flex md:bg-gray-300 md:rounded-lg">
                <div class="">
                    <img class="md:w-full rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1603739903239-8b6e64c3b185?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="">
                </div>
                <div class="relative shadow-lg bg-gray-300 md:bg-transparent md:shadow-none rounded-lg -mt-2 mx-2 p-2">
                    <h2 class="text-2xl tracking-tight font-semibold uppercase text-gray-800 md:text-lg">musica ligera</h2>
                    <p class="text-gray-700 leading-snug tracking-tighter">El disco de musica suave y contemporanea, ideal para tiempos de cuarentena.</p>
                    <div class="text-gray-600 font-semibold text-sm mt-2">3.99 USD</div>
                    <div class="text-yellow-600 text-xs mt-2">&starf; &starf; &starf; &starf; &star; / 36 Reseñas</div>
                </div>
            </div>

            <div class="mx-4 md:w-1/2 md:flex md:bg-gray-300 md:rounded-lg">
                <div class="">
                    <img class="md:w-full rounded-lg md:rounded-r-none" src="https://images.unsplash.com/photo-1603739903239-8b6e64c3b185?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="">
                </div>
                <div class="relative shadow-lg bg-gray-300 md:bg-transparent md:shadow-none rounded-lg -mt-2 mx-2 p-2">
                    <h2 class="text-2xl tracking-tight font-semibold uppercase text-gray-800 md:text-lg">musica ligera</h2>
                    <p class="text-gray-700 leading-snug tracking-tighter">El disco de musica suave y contemporanea, ideal para tiempos de cuarentena.</p>
                    <div class="text-gray-600 font-semibold text-sm mt-2">3.99 USD</div>
                    <div class="text-yellow-600 text-xs mt-2">&starf; &starf; &starf; &starf; &star; / 36 Reseñas</div>
                </div>
            </div>
        </div>

        <div class="container mx-auto py-12">
            <h1>Contactanos</h1>
            <div>
                <div>Nombre</div>
                <input class="w-full text-gray-700 leading-snug py-2 px-4 rounded bg-gray-200 border border-blue-300 hover:bg-white focus:outline-none focus:shadow-outline" type="text" placeholder="Nombre">
            </div>
            <div>
                <div>Email</div>
                <input class="w-full text-gray-700 leading-snug py-2 px-4 rounded bg-gray-200 border border-blue-300 hover:bg-white focus:outline-none focus:shadow-outline" type="email" placeholder="Email">
            </div>
            <div>
                <div>Comentarios</div>
                <textarea name="" id="" cols="30" rows="10"
                    class="w-full text-gray-700 leading-snug py-2 px-4 rounded bg-gray-200 border border-blue-300 hover:bg-white">
                
                </textarea>
            </div>
            <div>
                <button class="rounded shadow-md px-4 py-2 bg-gray-500 mx-auto block hover:bg-gray-700 hover:text-white">Enviar</button>
            </div>
        </div>
    </x-app-layout>  

@endsection