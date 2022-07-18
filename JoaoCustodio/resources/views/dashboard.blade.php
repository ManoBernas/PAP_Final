@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <a href="/categorias">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Nova</p>
                <h5 class="font-weight-bolder mb-0">
                  Categoria
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fas fa-project-diagram"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <a href="{{ route('produtos') }}">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Listar</p>
                <h5 class="font-weight-bolder mb-0">
                  Categorias
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <a href="{{ route('projetos.create') }}">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Novo</p>
                    <h5 class="font-weight-bolder mb-0">
                      Projetos
                      <span class="text-success text-sm font-weight-bolder"></span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fas fa-project-diagram"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ route('projetos') }}">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-8">
                      <div class="numbers">
                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Listar</p>
                        <h5 class="font-weight-bolder mb-0">
                          Projetos
                          <span class="text-success text-sm font-weight-bolder"></span>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
    {{-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Listar</p>
                <h5 class="font-weight-bolder mb-0">
                  Fotografias
                  <span class="text-danger text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fas fa-images"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Listar</p>
                <h5 class="font-weight-bolder mb-1">
                  Encomendas
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="fas fa-newspaper"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Categorias</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome Categoria</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">tipo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fotografia</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"></h6>
                          <p class="text-xs text-secondary mb-0">Carro João</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Carro</p>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Disponível</span>
                    </td> --}}
                    <td class="align-middle text-center">
                        <div>
                            <img src="../assets/img/slider1.jpg" class="avatar avatar-sm me-1" alt="user1">
                        </div>
                    </td>

                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"></h6>
                          <p class="text-xs text-secondary mb-0">Paisagem S.Martinho</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Paisagens</p>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Indisponível</span>
                    </td> --}}
                    <td class="align-middle text-center">
                        <div>
                            <img src="../assets/img/slider1.jpg" class="avatar avatar-sm me-1" alt="user1">
                        </div>
                    </td>

                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"></h6>
                          <p class="text-xs text-secondary mb-0">Mota Oficina</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Motas</p>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Indisponível</span>
                    </td> --}}
                    <td class="align-middle text-center">
                        <div>
                            <img src="../assets/img/slider1.jpg" class="avatar avatar-sm me-1" alt="user1">
                        </div>
                    </td>

                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"></h6>
                          <p class="text-xs text-secondary mb-0">Carros Rally</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Carro</p>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Disponível</span>
                    </td> --}}
                    <td class="align-middle text-center">
                        <div>
                            <img src="../assets/img/slider1.jpg" class="avatar avatar-sm me-1" alt="user1">
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"></h6>
                          <p class="text-xs text-secondary mb-0">Skate</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Desporto</p>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Indisponível</span>
                    </td> --}}
                    <td class="align-middle text-center">
                        <div>
                            <img src="../assets/img/slider1.jpg" class="avatar avatar-sm me-1" alt="user1">
                        </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
