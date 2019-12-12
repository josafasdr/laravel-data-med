@extends('base')

@section('conteudo')

<script>
  document.title = 'Data Med | Nova Quaixa';
</script>

<div class="container">
    <form class="form-group" action="{{ route('queixas.store') }}" method="post">
        @csrf
        <div class="col">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome">
          </div>

          <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select class="form-control" type="text" name="tipo_queixa_id" id="tipo">
              <option value="">Selecione...</option>
              @foreach($tiposQueixa as $tipoQueixa)
              <option value="{{ $tipoQueixa->id }}">{{ $tipoQueixa->nome }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" value="">Cadastrar</button>
          </div>
        </div>
    </form>
</div>

@endsection