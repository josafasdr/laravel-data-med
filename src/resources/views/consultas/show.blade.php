@extends('base')

<script>
  document.title = 'Data Med | Datalhe Consulta';
</script>

@section('conteudo')
<div class="container">
    <div class="coll">
      <span>#</span>
      <h2>{{ $consulta->id }}</h2>
      <span>Data:</span>
      <h2>{{ $consulta->created_at }}</h2>
      <span>Paciente:</span>
      <h2>{{ $consulta->paciente->nome }}</h2>
      <span>Queixas:</span>
      <br>
      @foreach($consulta->queixas as $queixa)
        <span>{{ $queixa->nome }}</span> <br>
      @endforeach
      <br>
      <span>Plano/Conduta:</span>
      <h2>{{ $consulta->plano_conduta }}</h2>
    </div>
    <a href="{{ route('consultas.index') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
</div>
@endsection