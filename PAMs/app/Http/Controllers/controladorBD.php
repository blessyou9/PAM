<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorBD extends Controller
{
    public function categoria()
    {
        return view('categoria');
    }

    public function productos()
    {
        return view('productos');
    }
    
    public function colaboradores()
    {
        return view('colaboradores');
    }



}
