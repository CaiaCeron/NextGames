
<script src="{{url('/js/cep.js')}}"></script>

            <div class="col-sm-4">
                <label for="cep">CEP: </label>
                <input type="text" class="form-control" id="cep" value="{{$fornecedor->endereco[0]->cep or old('cep')}}" name="cep">
            </div>
            <div class="col-sm-4">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" id="endereco" value="{{$fornecedor->endereco[0]->logradouro or old('endereco')}}" name="endereco">
            </div>
            <div class="col-sm-4">
                <label for="num">Número: </label>
                <input type="text" class="form-control" id="num" value="{{$fornecedor->endereco[0]->numero or old('num')}}" name="num">
            </div>
            <div class="col-sm-4">
                <label for="uf">Bairro: </label>
                <input type="text" class="form-control" id="bairro" value="{{$fornecedor->endereco[0]->bairro or old('bairro')}}" name="bairro">
            </div>
            <div class="col-sm-4">
                <label for="cidade">Cidade: </label>
                <input type="text" class="form-control" id="cidade" value="{{$fornecedor->endereco[0]->cidade->nome or old('cidade')}}" name="cidade">
            </div>
            <div class="col-sm-4">
                <label for="estado">Estado: </label>
                <input type="text" class="form-control" id="estado" value="{{$fornecedor->endereco[0]->cidade->estado->nome or old('estado')}}" name="estado">
            </div>

            <div class="col-sm-4">
                <label for="pais">Pais: </label>
                <input type="text" class="form-control" id="pais" value="{{$fornecedor->endereco[0]->cidade->estado->pais->nome or old('pais')}}" name="pais">
            </div>


