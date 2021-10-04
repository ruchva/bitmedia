<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class PageController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function index()
    {
        return view('index');
    }
    
    public function client(Client $client)
    {
        return view('client', compact('client'));
    }

    public function tailwind()
    {
        return view('tailwind');
    }
}
