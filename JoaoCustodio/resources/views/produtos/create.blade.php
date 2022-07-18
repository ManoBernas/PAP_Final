@extends('layouts.admin')

@section('content')

{{-- <div class="mb-4">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="mb-3">
   <label for="exampleInputIconPassword">Password</label>
   <div class="input-group">
        <input type="password" class="form-control" id="password" placeholder="Password" aria-label="Password">
        <span class="input-group-text" id="basic-addon3">
            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
        </span>
    </div>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input class="form-control" type="file" id="formFile">
</div> --}}
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-sm-6">
                <h3>Fotografia</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Nova Fotografia</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<form role="form" method="POST" action="/produtos" enctype="multipart/form-data">
@csrf
    <div class="card-body">

        <div class="form-group">
            <label for="categoria_id">Categoria</label>
            <select class="form-control select2" name="categoria_id" style="width: 100%;">
                <option value="DO" disabled selected="selected">Selecione uma Categoria</option>

                @foreach ($categorias as $categoria)

                @if (old('categoria_id') == $categoria->id )
                    <option value="{{ $categoria->id }}" selected>{{ $categoria->designacao }}</option>
                @else
                    <option value="{{ $categoria->id }}">{{ $categoria->designacao }}</option>
                @endif

                @endforeach
            </select>
            @error('selectCat')
            <p class="text-danger">
                {{ $errors->first('selectCat') }}
            </p>
            @enderror
        </div>

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
@endsection
