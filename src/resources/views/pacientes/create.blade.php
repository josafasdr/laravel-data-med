@extends('base')

@section('conteudo')

<script>
  document.title = 'Data Med | Pacientes';
</script>

<div class="container">
    <form class="form-group" action="{{ route('pacientes.store') }}" method="post">
        @csrf
        <div class="col">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
          </div>

          <div class="form-group">
            <label for="sexo">Sexo:</label>
            <input class="form-control" type="text" name="sexo" id="sexo">
          </div>

          <div class="form-group">
            <label for="nascimento">Nascimento</label>
            <input class="form-control" type="date" name="nascimento" id="nascimento">
          </div>

          <div class="form-group">
            <label for="prontuario">Prontuario:</label>
            <input class="form-control" type="number" name="prontuario" id="prontuario">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" value="">Cadastrar</button>
          </div>
        </div>
    </form>
</div>

@endsection