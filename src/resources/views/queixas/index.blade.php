@extends('base')

@section('conteudo')

<script>
  document.title = 'Data Med | Queixas';
</script>

<div class="container pb-5">
  <a class="btn btn-outline-primary btn-sm" href="{{ route('queixas.create') }}">Nova Queixa</a>
  <br><br>
  <table class='table table-hover'>
      <tr class="bg-light">
        <th>#</th>
        <th>Nome</th>
        <th>Tipo</th>
        <!-- <th>Sexo</th>
        <th>Nascimento</th>
        <th>Prontuário</th> -->
        <th>Ações</th>
      </tr>
      @foreach($queixas as $queixa)
      <tr>
        <td>{{ $queixa->id }}</td>
        <td>{{ $queixa->nome }}</td>
        <td>{{ $queixa->tipoQueixa->nome }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection