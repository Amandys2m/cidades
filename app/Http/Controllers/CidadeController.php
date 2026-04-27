<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function listar()
    {
        $cidades = Cidade::all();
        return view('cidades.listar', ['cidades' => $cidades]);
    }

}
