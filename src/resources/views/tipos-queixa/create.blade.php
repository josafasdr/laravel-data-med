@extends('base')

@section('conteudo')

<script>
  document.title = 'Data Med | Novo Tipo de Queixa'
</script>
<div class="container">
    <form class="form-group" action="{{ route('tipos-queixa.store') }}" method="post">
        @csrf
        <div class="col">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" value="">Cadastrar</button>
            <a href="{{ route('tipos-queixa.index') }}"><button type="button" class="btn btn-outline-secondary">Cancelar</button></a>
          </div>
        </div>
    </form>
</div>

@endsection