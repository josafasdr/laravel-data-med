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
  document.title = "Data Med | Nova Consulta";

  function addQueixa(event) {
    
    document.querySelector('#queixas').value +=  (document.querySelector('#queixas').value === '' ?
      event.target.querySelector('input').value : ',' + event.target.querySelector('input').value);

    document.querySelector('#added-queixas').appendChild(event.target);
  }
</script>

@section('conteudo')

<div class="container">
    <form class="form-group" action="{{ route('consultas.store') }}" method="post">
        @csrf
        <div class="col">

          <div class="form-group">
            <label for="paciente">Paciente:</label>
            <select class="form-control" type="text" name="paciente_id" id="paciente">
              <option value="">Selecione...</option>
            @foreach($pacientes as $paciente)
              <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>
            @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="added-queixas">Queixas:</label>
            <div class="added-queixas d-flex rounded mb-1 p-1" id="added-queixas"></div>
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
            <textarea class="form-control" name="plano_conduta" id="plano-conduta" rows="5"></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" value="">Cadastrar</button>
          </div>
        </div>
    </form>
</div>

@endsection