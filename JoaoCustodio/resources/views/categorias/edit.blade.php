@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-sm-6">
                <h3>Projetos</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Nova Catgeoria</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<form role="form" method="POST" action="/categorias/{{ $categoria->id }}" enctype="multipart/form-data">
@csrf
@method("PUT")
<input type="hidden" name="tipo"  value="1" />

@method("PUT")
    <div class="card-body">
        <div class="form-group">
            <label for="designacao">Categoria</label>
            <input type="text" name="designacao" required value="{{ old("designacao", $categoria->designacao) }}" class="form-control" />
            @error('selectCat')
            <p class="text-danger">
                {{ $errors->first('designacao') }}
            </p>
            @enderror
        </div>

    </div>
    <div class="card-footer">
        <button type="reset" class="btn btn-warning" id="btnLimpar" name="btnLimpar">Limpar</button>
        <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Enviar</button>
    </div>
</form>
@endsection
