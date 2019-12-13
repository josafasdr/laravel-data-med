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
        <th>Ações</th>
      </tr>
      @foreach($tiposQueixa as $tipoQueixa)
      <tr>
        <td>{{ $tipoQueixa->id }}</td>
        <td>{{ $tipoQueixa->nome }}</td>
        <td>
          <div class="btn-actions">
            <a href="{{ route('tipos-queixa.edit', $tipoQueixa->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-1">Edit</button></a>
            <form action="{{ route('tipos-queixa.destroy', $tipoQueixa->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-secondary" value="">Del</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection