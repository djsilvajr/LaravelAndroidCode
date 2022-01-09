@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Tipos de Dados</h1>
@stop

@section('content')
    
    <div class="row" style="float: left;">
        <div class="col-xs-12">
          <div class="box">

            {{-- <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>id</th>
                  <th>Nome do jogo</th>
                  <th>Produtora</th>
                  <th>Plataforma</th>
                  <th>Quantidade</th>
                  <th>opcoes</th>
                </tr>

                
                @foreach ($produtos as $pro)
                <tr>
                    <td>{{ $pro->id }}</td>
                    <td>{{ $pro->nome }}</td>
                    <td>{{ $pro->produtor }}</td>
                    <td>{{ $pro->plataforma }}</td>
                    <td>{{ $pro->quantidade }}</td>
                <td>
                    <a class ="btn btn-info btn-xs" href="editar/{{$pro->id}}">Editar </a>
                    <a class ="btn btn-danger btn-xs" href="excluir/{{$pro->id}}"> Excluir</a>
                </td>
                </tr>
                @endforeach
              </tbody></table>
            </div> --}}
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop