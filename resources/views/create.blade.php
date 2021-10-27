@extends('app')
@section('titulo', 'Cadastro de Diaristas')
@section('conteudo')
<form action="{{ route('diaristas.store') }}" method="POST" enctype="multipart/form-data">

  @include('_form')

</form>
@endsection