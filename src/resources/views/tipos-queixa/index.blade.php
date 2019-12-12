@extends('base')

@section('conteudo')
<script>
  document.title = 'Data Med | Tipos de Queixa';
</script>
<div class="container pb-5">
  <a class="btn btn-outline-primary btn-sm" href="{{ route('tipos-queixa.create') }}">Novo Tipo</a>
  <br><br>
  <table class='table table-hover'>
      <tr class="bg-light">
        <th>#</th>
        <th>Nome</th>
        <!-- <th>Sexo</th>
        <th>Nascimento</th>
        <th>Prontuário</th> -->
        <th>Ações</th>
      </tr>
      @foreach($tiposQueixa as $tipoQueixa)
      <tr>
        <td>{{ $tipoQueixa->id }}</td>
        <td>{{ $tipoQueixa->nome }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection