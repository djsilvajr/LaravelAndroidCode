@extends('adminlte::page')

@section('title', 'Novo produto')

@section('content_header')
    <h1>Adicionar algum tipo de dado</h1>
@stop

@section('content')
    <div class="row">
        <div class = "col-md-6">
            <form role="form" method="POST">
                <div class="form-group">
                    <div class="box box-primary">
                      
                        <!-- form start -->
                        <form role="form" method="POST">
                          <div class="box-body">

                            {{ csrf_field() }}

                            {{-- <div class="form-group">
                              <label for="exampleInputEmail1">Nome do jogo</label>
                              <input type="text" class="form-control" name="nome_form" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Produtora</label>
                              <input type="text" class="form-control" name="produtor_form" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Plataforma</label>
                                <input type="text" class="form-control" name="plataforma_form" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Quantidade</label>
                                <input type="number" class="form-control" name="quantidade_form" required>
                              </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar novo</button>
                          </div> --}}
                        </form>
                      </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop