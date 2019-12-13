@extends('base')

<script>
  document.title = 'Data Med | Editar Tipo Queixa';
</script>

@section('conteudo')
<div class="container">
    
  <form action="{{ route('tipos-queixa.update', $tipoQueixa->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="col">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $tipoQueixa->nome }}">
      </div>

      <div class="btn-group">
        <button type="submit" class="btn btn-primary" value="">Save</button>
      </div>
    </div>
  </form>
</div>
@endsection