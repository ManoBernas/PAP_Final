<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Foto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listagem de produtos
        $categorias = Categoria::all(); //select * from produtos;
        return view('produtos.index', compact('categorias'));
        //o método compact serve para passar o resultado do select para a view index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::where('tipo', 1)->get(); //select * from categorias;
        return view('produtos.create', compact('categorias'));
    }

    public function inserirFotos(Categoria $categoria){

        return view("produtos.inserirfotos", compact("categoria"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        foreach ($request->file('imageFile') as $file) {

            $filename =  date('Y_m_d_H_i_s')."_".trim($file->getClientOriginalName());
            $extension = $file->getClientOriginalExtension();

            $destinationPath = "uploads/fotos";
            $file->move($destinationPath,$filename);

            Foto::create([
                "designacao" => $filename,
                "categoria_id" => $request->categoria_id
            ]);
            /* $foto = new Foto();
            $foto->designacao = $filename;
            $foto->categoria_id = $request->categoria_id;
            $foto->save(); */
          }

        return redirect()->route("produtos")->with('message', 'Produto inserido com sucesso!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
        $categorias = Categoria::where('tipo', 1)->get(); //select * from categorias;
        return view('produtos.edit', compact('categorias', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {

        request()->validate([
            'selectCat' => 'required',
        ]);

        $produto->categoria_id = request('selectCat');
        // $produto->disponibilidade_id = request('dispProd');
        // $produto->preBase = request('preBase');

        $produto->save();

        $file = $request->file('imageFile');
        $filename =  date('Y_m_d_H_i_s')."_".trim($file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();

        $destinationPath = "uploads/fotos";
        $file->move($destinationPath,$filename);


        $foto = Foto::where('produto_id', $produto->id)->first();
        $foto->designacao = $filename;

        $foto->save();

        return redirect('/produtos')->with('message', 'Produto alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect(url()->previous());
    }

    public function destroyFoto (Foto $foto){
        return $foto;
        $foto->delete();
        return redirect(url()->previous());

    }
}
