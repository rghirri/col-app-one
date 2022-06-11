<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class CollectionController extends Controller
{
    private $items;

    public function __construct()
    {
        
        $json = Http::get('https://dev.shepherd.appoly.io/fruit.json')->json();

        //var_dump($json);

        $this->items = collect($json['menu_items'])->sort();
    }

    public function index()
    {
        return view('collection.index', [
            'items' => $this->items
        ]);
    }
    
}