@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Fotografias</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Listar Fotografias</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria do Produto</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Botões</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($categorias as $categoria)

        <tr>
             <td>
              <div class="d-flex px-2 py-1">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm"></h6>
                  <p class="text-xs text-secondary mb-0">{{ $categoria->designacao }}</p>
                </div>
              </div>
            </td>


            <td class="text-center">
                <a href="/categorias/{{ $categoria->id }}/fotos">
                    <button class="btn btn-light" type="submit">
                        <i class="fa fa-plus text-xs font-weight-bold mb-0 text-success" aria-hidden="true"></i>
                    </button>
                </a>
                <a href="/categorias/{{ $categoria->id }}/edit">
                    <button class="btn btn-light" type="submite">
                        <i class="fa fa-pencil text-xs font-weight-bold mb-0 text-warning" aria-hidden="true"></i>
                    </button>
                </a>
                <a href="/categorias/{{ $categoria->id }}/delete">
                    <button class="btn btn-light" type="submit">
                        <i class="fa fa-trash text-xs font-weight-bold mb-0 text-danger" aria-hidden="true"></i>
                </button>
                </a>
            </td>
          </tr>

        @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection
