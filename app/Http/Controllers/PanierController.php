<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index()
    {
        // Code pour récupérer les données du panier, si nécessaire
    
        return view('panier');
    }
    
    
}
