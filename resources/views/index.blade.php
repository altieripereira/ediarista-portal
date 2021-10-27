@extends('app')
@section('titulo', 'Lista de Diaristas')
@section('conteudo')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($diaristas as $diarista)
    <tr>
      <th scope="row">{{$diarista->id}}</th>
      <td>{{$diarista->nome_completo}}</td>
      <td>{{$diarista->telefone}}</td>
      <td>
        <a href="{{route('diaristas.edit', $diarista) }}" class="btn btn-primary">[Editar]</a>
        <a href="{{route('diaristas.destroy', $diarista) }}" class="btn btn-danger" onclick="return confirm('Deseja realmente apagar o registro')">[Apagar]</a>
      </td>
    </tr>
    @empty
    <tr>
      <th colspan="4" scope="row">Nenhum registro localizado</th>
    </tr>
    @endforelse
  </tbody>
</table>
<a href="{{ route('diaristas.create') }}" role="button" class="btn btn-primary">Nova Diarista</a>
@endsection