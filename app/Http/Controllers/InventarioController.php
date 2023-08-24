<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function show()
    {
        return view('inventario.index');
    }
    public function index()
    {
        return view('inventario.index');
    }
}


