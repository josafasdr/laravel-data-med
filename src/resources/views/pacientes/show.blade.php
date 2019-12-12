@extends('base')

@section('conteudo')
<div class="container">
    <div class="coll">
        <h2>{{ $paciente->id }}</h2>
        <h2>{{ $paciente->nome }}</h2>
        <h2>{{ $paciente->sexo }}</h2>
        <h2>{{ $paciente->nascimento }}</h2>
        <h2>{{ $paciente->prontuario }}</h2>
    </div>
    <a href="{{ route('pacientes.index') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
</div>
@endsection