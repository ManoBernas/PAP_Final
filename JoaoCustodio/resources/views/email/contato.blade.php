<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Projeto Rodrigo</title>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="{{URL::to('public\assets\css\bootstrap.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('public\assets\css\font-awesome.min.css') }}">

    </head>
    <body>
        <div class="container">

    <div class="row">
        <div class="box box-info">
            <div class="box-header with-border">
                <i class="fa fa-bandcamp"></i><h3 class="box-title">Mensagem do site</h3>
            </div>
            <div class="box-body">
                <div class="row">

                    <div class="col-md-6">
                        <p><strong><i class="fa fa-ellipsis-v"></i> Nome: </strong>{{$nome}}</p>
                        <p><strong><i class="fa fa-ellipsis-v"></i> Email: </strong>{{$email}}</p>
                        <p><strong><i class="fa fa-ellipsis-v"></i> Mensagem: </strong>{{$mensagem}}</p>
                    </div>

                </div>
            </div>
            <div class="box-footer">

            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="{{URL::to('public\assets\js\vendor\jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public\assets\js\vendor\bootstrap.min.js')}}"></script>
</body>
</html>
