<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\Commercial;

class ActivMap extends Component
{
    //componente y vista livewire -> php artisan make:livewire ActivMap
    public function render(Client $client)
    {
        // return view('livewire.activ-map');
        return view('livewire.activ-map',[
            'commercials' => Commercial::where("client_id",$client->id)->get()
            // 'commercials' => Commercial::latest()->with('commercial')->take(9)->get()
        ]);
    }
}
