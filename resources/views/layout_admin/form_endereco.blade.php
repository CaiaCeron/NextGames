<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulário de Endereços</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{url('/js/cep.js')}}"></script>
    </head>
    <body>

        <div class="container">
            <h3>Formulário de Endereçoes</h3>
            <form method="post" action="{{route('endereco.cadastrar')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="cep">CEP: </label>
                    <input type="text" class="form-control" id="cep" name="cep">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço: </label>
                    <input type="text" class="form-control" id="endereco"  name="endereco">
                </div>
                <div class="form-group">
                    <label for="num">Número: </label>
                    <input type="text" class="form-control" id="num"  name="num">
                </div>
                <div class="form-group">
                    <label for="uf">Bairro: </label>
                    <input type="text" class="form-control" id="bairro"  name="bairro">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade: </label>
                    <input type="text" class="form-control" id="cidade"  name="cidade">
                </div>
                <div class="form-group">
                    <label for="estado">Estado: </label>
                    <input type="text" class="form-control" id="estado"  name="estado">
                </div>

                <div class="form-group">
                    <label for="pais">Pais: </label>
                    <input type="text" class="form-control" id="pais"  name="pais">
                </div>

                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>

    </body>
</html>
