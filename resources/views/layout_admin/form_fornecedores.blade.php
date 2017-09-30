@extends('layout_admin.template')

@section('conteudo')

<div class="container-fluid">
    <div class="row">
        &nbsp;
        <h2>Formulário de Forecedores</h2>
        @if($acao === 1)
        <form method="post" action="{{route('admin.fornecedor.cad')}}">
            @elseif($acao === 2)

            <form method="post" action="{{route('admin.fornecedor.atualiza')}}">

                @endif
                {{ csrf_field() }}

                <div class="col-sm-4">
                    <label for="cnpj">Cnpj: </label>
                    <input type="text" class="form-control" id="cnpj" value="{{$fornecedor->cnpj or old('cnpj')}}" name="cnpj">
                </div>

                <div class="col-sm-4">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" value="{{$fornecedor->nome or old('nome')}}" id="nome" name="nome">
                </div>

                <div class="col-sm-4">
                    <label for="email">E-mail: </label>
                    <input type="email" class="form-control" id="email" value="{{$fornecedor->email or old('email')}}" name="email">
                </div>

                <div class="col-sm-4">
                    <label for="fone">Telefone: </label>
                    <input type="text" class="form-control" id="fone" value="{{$fornecedor->telefone or old('fone')}}" name="fone">
                </div>

                @include('layout_admin.form_endereco')

                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
    </div>
</div>

@endsection