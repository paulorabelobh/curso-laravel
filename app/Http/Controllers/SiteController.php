<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(3);
        return view('site/home',compact('produtos'));
    }

    public function details($id)
    {
        $produto = Produto::where('id',$id)->first();
        Gate::authorize('ver-produto', $produto);
        return view('site/details', compact('produto'));
    }

    public function categoria($id)
    {
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categoria',$id)->paginate(3);
        return view('site/categoria', compact('produtos','categoria'));
    } 

}
 