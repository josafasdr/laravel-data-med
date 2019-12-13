@extends('base')

<style>
  .add-queixas {
    box-shadow: 1px 0px 1px 1px #888888 inset;
  }

  .added-queixas {
    box-shadow: 1px 0px 1px 1px #888888 inset;
  }

  .add-queixa:hover {
    cursor: pointer;
  }
</style>

<script>
  document.title = "Data Med | Editar Consulta";

  function addQueixa(eventAdd) {
    console.log(document.querySelector('#queixas').value)
    document.querySelector('#queixas').value +=  (document.querySelector('#queixas').value === '' ?
    eventAdd.target.querySelector('input').value : ',' + eventAdd.target.querySelector('input').value);

    document.querySelector('#added-queixas').appendChild(eventAdd.target);
    eventAdd.target.setAttribute('onclick', 'removeQueixa(event)')
  }

  function removeQueixa(eventRemove) {

    document.querySelector('#added-queixas').removeChild(eventRemove.target);
    var inputs = document.querySelector('#added-queixas').querySelectorAll('input');
    
    var queixasValues = '';
    inputs.forEach(function(input) {
      queixasValues += queixasValues === '' ? input.value : ',' + input.value;
      console.log(queixasValues)
    })
    document.querySelector('#queixas').value = queixasValues;
  }
</script>

@section('conteudo')

<div class="container">
    <form class="form-group" action="{{ route('consultas.update', $consulta->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="col">

          <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select class="form-control" type="text" name="paciente_id" id="paciente" readeonly>
              <option value="{{ $consulta->paciente->id }}">{{ $consulta->paciente->nome }}</option>
            </select>
          </div>

          <div class="form-group">
            <label for="added-queixas">Queixas:</label>
            <div class="added-queixas d-flex rounded mb-1 p-1" id="added-queixas">
              @foreach($consulta->queixas as $queixa)
              <div class="add-queixa rounded m-1 px-1 bg-primary text-light cursor-pointer" onclick="removeQueixa(event)">
                <input type="hidden" value="{{ $queixa->id }}">
                {{ $queixa->nome }} x
              </div>
              @endforeach
            </div>
            <input type="hidden" name="queixas" id="queixas" value="">

            <label for="add-queixas">Clique para adicionar:</label>
            <div class="add-queixas d-flex rounded p-1" name="add-queixas" id="add-quaixas">
              @foreach($queixas as $queixa)
              <div class="add-queixa rounded m-1 px-1 bg-primary text-light cursor-pointer" onclick="addQueixa(event)">
                <input type="hidden" value="{{ $queixa->id }}">
                {{ $queixa->nome }} +
              </div>
              @endforeach
            </div>
          </div>

          <div class="form-group">
            <label for="plano_conduta">Plano/Conduta:</label>
            <textarea class="form-control" name="plano_conduta" id="plano-conduta" rows="5">{{ $consulta->plano_conduta }}</textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" value="">Cadastrar</button>
          </div>
        </div>
    </form>
</div>
@endsection