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
                    <li class="breadcrumb-item active">Novo Projeto</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<form role="form" method="POST" action="/categorias/inserirFoto" enctype="multipart/form-data">
@csrf
<input type="hidden" name="categoria_id" value="{{ $categoria->id }}" />
    <div class="card-body">


        <div class="form-group">
            <label>Fotos</label>
            <div class="user-image mb-3 text-center">
                <div class="imgPreview"></div>
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="images" name="imageFile[]" multiple="multiple">
                </div>

            </div>
            @error('imageFile')
                <p class="text-danger">
                    {{ $errors->first('imageFile') }}
                </p>
                @enderror
                @error('imageFile.*')
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">
                            {{ $errors }}
                        </p>
                    @endforeach
                @enderror
        </div>
    </div>
    <div class="card-footer">
        <button type="reset" class="btn btn-warning" id="btnLimpar" name="btnLimpar">Limpar</button>
        <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Enviar</button>
    </div>
</form>
<div class="container">
    <div class="row">
        @foreach ($categoria->fotos as $foto)
        <div class="col-12 col-md-4">
            <img src="{{asset("/uploads/fotos/".$foto->designacao)}}" class="img-thumbnail" alt="user1">
            <a href="/categoria/{{$foto->id}}/eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        </div>
        @endforeach

    </div>
</div>
@endsection
