<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\FotosProjetos;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projetos = Projeto::all();

        //dd($projetos);
        return view('projetos.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $categorias = Categoria::where('tipo', 2)->get();
        return view('projetos.create');
    }


    public function inserirFotos(Projeto $projeto){

        return view("projetos.inserirfotos", compact("projeto"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       request()->validate([
           'inputDesig' => 'required',
       ]);

        $projeto = new Projeto();

        $projeto->designacao = request('inputDesig');
        $projeto->categoria_id = 1;


        $projeto->save();

      // $file = $request->file('imageFile');
      // $filename =  date('Y_m_d_H_i_s')."_".trim($file->getClientOriginalName());
      // $extension = $file->getClientOriginalExtension();

      // $destinationPath = "uploads/fotos/projetos";
      // $file->move($destinationPath,$filename);


      // $fotoProjetos = new FotosProjetos();
      // $fotoProjetos->designacao = $filename;
      // $fotoProjetos->caminho = $filename;
      // $fotoProjetos->projeto_id = $projeto->id;
      // $fotoProjetos->save();

        return redirect('/projetos/')->with('message', 'Projeto inserido com sucesso!');
    }


    public function storeFoto(Request $request)
    {


       foreach ($request->file('imageFile') as $file) {

        //$file = $request->file('imageFile');
        $filename =  date('Y_m_d_H_i_s')."_".trim($file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();

        $destinationPath = "uploads/fotos/projetos";
        $file->move($destinationPath,$filename);

        $fotoProjetos = new FotosProjetos();
        $fotoProjetos->designacao = $filename;
        $fotoProjetos->caminho = $filename;
        $fotoProjetos->projeto_id = $request->projeto_id;
        $fotoProjetos->save();
      }


       /* $file = $request->file('imageFile');
       $filename =  date('Y_m_d_H_i_s')."_".trim($file->getClientOriginalName());
       $extension = $file->getClientOriginalExtension();

       $destinationPath = "uploads/fotos/projetos";
       $file->move($destinationPath,$filename);

       $fotoProjetos = new FotosProjetos();
       $fotoProjetos->designacao = $filename;
       $fotoProjetos->caminho = $filename;
       $fotoProjetos->projeto_id = $projeto->id;
       $fotoProjetos->save(); */

        return redirect('/projetos')->with('message', 'Projeto inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {

        // $categorias = Categoria::where('tipo', 2)->get(); //select * from categorias;
        return view('projetos.edit', compact('projeto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        //
        request()->validate([
            'inputDesig' => 'required',
            //'selectCat' => 'required', basicamente está a dar erro aqui porque não estás a enviar categoria nenhuma
        ]);

        $projeto->designacao = request('inputDesig');
        $projeto->categoria_id = 1;

        $projeto->save();

        // /* $file = $request->file('imageFile');
        // $filename =  date('Y_m_d_H_i_s')."_".trim($file->getClientOriginalName());
        // $extension = $file->getClientOriginalExtension();

        // $destinationPath = "uploads/fotos/Projetos";
        // $file->move($destinationPath,$filename);


        // $fotoProjetos = new FotoProjetos();
        // $fotoProjetos->designacao = $filename;

        // $fotoProjetos->save(); */

        return redirect('/projetos')->with('message', 'Projeto alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        $projeto->delete();

        return redirect(url()->previous());
    }

    public function destroyFoto (FotosProjetos $foto){
        $foto->delete();
        return redirect(url()->previous());

    }
}
