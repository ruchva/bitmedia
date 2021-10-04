<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientList extends Component
{
    public function render()
    {
        //este metodo se encarga de renderizar el contenido
        //componente y vista livewire se creo con-> php artisan make:livewire ClientList
        return view('livewire.client-list',[
            'clients' => Client::latest()->with('client')->take(9)->get()
        ]);
    }
}
