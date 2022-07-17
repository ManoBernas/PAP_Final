<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Foto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categorias.create");
    }

public function storeFotos(Request $request){

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Categoria::create($request->all());
        $categorias = Categoria::all();
        return view('produtos.index', compact('categorias'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        request()->validate([
            'designacao' => 'required',
        ]);

        $categoria->designacao = request('designacao');
        $categoria->tipo = 1;

        $categoria->save();

        return redirect('/produtos')->with('message', 'Categoria alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
        $categoria->delete();

        return redirect(url()->previous());
    }

    public function destroyFoto (Foto $foto){

        $foto->delete();
        return redirect(url()->previous());

    }
}
