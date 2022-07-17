<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Projeto;

use App\Models\Categoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
        // return view('carros');
    }

    public function frontend(){
        $categorias = Categoria::with("fotos")->has("fotos")->get();
        $projetos = Projeto::with("fotoProjetos")->has("fotoProjetos")->get();
        return view("home", compact("categorias", "projetos"));
    }

    public function show(Categoria $categoria)
    {

        return view('imagens', compact('categoria'));
    }
    public function motas()
    {
        $titulo='Motas';
        $produtos = Produto::where('categoria_id', 2)->get();
        return view('imagens', compact('produtos', 'titulo'));
    }
    public function pessoas()
    {
        $titulo='Pessoas';
        $produtos = Produto::where('categoria_id', 3)->get();
        return view('imagens', compact('produtos', 'titulo'));
    }
    public function projetos()
    {
        $projetos = Projeto::all();
        return view('projetos', compact("projetos"));
    }

    public function projetodt($id)
    {
        $projeto = Projeto::find($id);
        return view('projetodt', compact("projeto"));
    }
    public function projetopasseio()
    {
        return view('projetopasseio');
    }
    public function projetorally()
    {
        return view('projetorally');
    }
}
