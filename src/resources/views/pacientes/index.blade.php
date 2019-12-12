@extends('base')

@section('conteudo')

<div class="container pb-5">
  <a class="btn btn-outline-primary btn-sm" href="{{ route('pacientes.create') }}">Cadastrar Paciente</a>
  <br><br>
  <table class='table table-hover'>
      <tr class="bg-light">
        <th>#</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Nascimento</th>
        <th>Prontuário</th>
        <th>Ações</th>
      </tr>
      @foreach($pacientes as $paciente)
      <tr>
        <td>{{ $paciente->id }}</td>
        <td>{{ $paciente->nome }}</td>
        <td>{{ $paciente->sexo }}</td>
        <td>{{ $paciente->nascimento }}</td>
        <td>{{ $paciente->prontuario }}</td>
        <td>
          <div class="btn-actions">
            <a href="{{ route('pacientes.show', $paciente->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-1">View</button></a>
            <a href="{{ route('pacientes.edit', $paciente->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary mr-1">Edit</button></a>
            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="post">
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