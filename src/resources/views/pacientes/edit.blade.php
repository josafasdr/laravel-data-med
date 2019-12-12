@extends('base')

<script>
  document.title = 'Data Med | Editar Paciente';
</script>

@section('conteudo')
<div class="container">
    
  <form action="{{ route('pacientes.update', $paciente->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="col">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $paciente->nome }}">
      </div>

      <div class="form-group">
        <label for="sexo">Sexo:</label>
        <input class="form-control" type="text" name="sexo" id="sexo" value="{{ $paciente->sexo }}">
      </div>

      <div class="form-group">
        <label for="nascimento">Nascimento</label>
        <input type="date" class="form-control" name="nascimento" id="nascimento" value="{{ $paciente->nascimento }}">
      </div>

      <div class="btn-group">
        <button type="submit" class="btn btn-primary" value="">Save</button>
      </div>
    </div>
  </form>
</div>
@endsection