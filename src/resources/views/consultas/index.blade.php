@extends('base')

@section('conteudo')

<script>
  document.title = 'Data Med | Consultas';
</script>

<div class="container pb-5">
  <a class="btn btn-outline-primary btn-sm" href="{{ route('consultas.create') }}">Nova Consulta</a>
  <br><br>
  <table class='table table-hover'>
      <tr class="bg-light">
        <th>#</th>
        <th>Paciente</th>
        <th>Data</th>
        <th>Ações</th>
      </tr>
      @foreach($consultas as $consulta)
      <tr>
        <td>{{ $consulta->id }}</td>
        <td>{{ $consulta->paciente->nome }}</td>
        <td>{{ $consulta->created_at }}</td>
        <td>
          <div class="btn-actions">
            <a href="{{ route('consultas.show', $consulta->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
            <a href="{{ route('consultas.edit', $consulta->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary ml-1">Edit</button></a>
            <form action="{{ route('consultas.destroy', $consulta->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-secondary ml-1" value="">Del</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@endsection