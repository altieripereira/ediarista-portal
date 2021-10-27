@extends('app')
@section('titulo', 'Editar Diarista')
@section('conteudo')
<form action="{{ route('diaristas.update', $diarista) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @include('_form')
</form>
@endsection