@extends('template.app')
<!-- Extende o html do template/app.blade.php -->
<!--Lá eu tenho o  @yield('content') e ele é como um APP-ROOT do angular  -->

@section('content')

@foreach( $pessoas as $pessoa )
<div class="panel panel-default panel-info">
  <div class="panel-heading">
    <b>Nome: </b> {{ $pessoa->nome }}
    <a href="{{ url("/pessoas/$pessoa->id/deletar") }}" margin-left right class="btn btn-danger btn-xs">
      <i class="glyphicon glyphicon-remove"></i>
    </a>
    <a href="{{ url("/pessoas/$pessoa->id/editar") }}" right class="btn btn-primary btn-xs">
      <i class="glyphicon glyphicon-pencil"></i>
    </a>
  </div><!-- Título -->
  <div class="panel-body">
    <b>Telefone: </b>@foreach( $pessoa->telefone as $telefone) ( {{ $telefone->ddd }} ) {{ $telefone->telefone }} @endforeach
  </div><!-- Conteúdo -->
</div>
@endforeach

@endsection