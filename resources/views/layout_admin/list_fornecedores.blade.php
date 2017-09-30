@extends('layout_admin.template')

@section('conteudo')

&nbsp;
<div class="row">
    <div class="col-sm-10">
        <h1>Registro de fornecedores</h1>
    </div>
    <div class="col-sm-2">

        <a <i class="glyphicon glyphicon-plus" href="{{route('admin.fornecedor.form')}}" style="color: #0088cc;font-size: 20px; text-decoration: none; margin-top: 50px ">Novo</a>
    </div>

</div>

<div class="row">
    <div class="col-sm-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>E-mail</th>
                    <th>Contato</th>
                    <th>Endereço</th>

                </tr>
            </thead>
            @foreach($fornecedor as $f)
            @foreach($f->endereco as $e)
            <tbody>

                <tr>
                    <td>{{$f->nome}}</td>
                    <td>{{$f->email}}</td>
                    <td>{{$f->telefone}}</td>
                    <td>{{$e->logradouro}}</td>


                    <td>    
                        <a data-toggle="modal" data-target="#myModal" href="" style="color: black; padding-right: 10px;text-decoration: none" title="Detalhes"<i class="glyphicon glyphicon-search"></a>
                        <a  href="{{route('admin.fornecedor.edit', $f->id)}}" style="color: black;padding-right: 10px; text-decoration: none" title="Editar"<i class="glyphicon glyphicon-pencil"></a>          
                        <a href="" style="color: black; text-decoration: none" title="Excluir"<i class="glyphicon glyphicon-trash"></a>

                    </td>

                </tr>

            </tbody>

            @endforeach
            @endforeach
        </table>



        <div class="row" style="text-align: center">
            {{ $fornecedor->links() }}
        </div>
    </div>
</div>



@endsection