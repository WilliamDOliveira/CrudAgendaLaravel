@extends('template.app')

@section('content')

<div class="row">

    <div class="col-xs-12">
        <h3>Editar Contato</h3>
    </div>

    <div class="col-xs-12 col-sm-6">
        <div class="col-xs-12 well">
        {{-- O server side do laravel usa somente get e post, se estiver fazendo api com ele, ae sim usa outros methods como put   --}}
            <form method="POST" action="{{ url('/pessoas/update') }}">
                {{--  {{ csrf_token() }}  É um token  --}}
                {{ csrf_field() }} {{--  cria um campo hidden e um token para enviar o formulário com um pouco mais de segurança, pelo menos evitando alguns robots  --}}
                
                <input type="hidden" name="id" value="{{ $pessoa->id }}">
                {{-- Aqui estou criando um input invisivel com o id do usuario que eu irei enviar via post na hora de atualizar seus dados é minha referencia  --}}
                
                <div class="form-group">
                    <input type="text" name="nome" value="{{ $pessoa->nome }}" placeholder="Nome" class="form-control">
                </div>
                <button type="submit" class="btn-primary btn btn-large btn-block">Atualizar</button>
                <a href="javascript:history.back()" class="btn-primary btn btn-large btn-block">Voltar</a>
            </form>
        </div>
    </div>

    <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default panel-info">
            <div class="panel-heading">
                <b>Nome: </b> {{ $pessoa->nome }}
                {{--  <a href="{{ url("/pessoas/$pessoa->id/editar") }}" right class="btn btn-primary btn-xs">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>  --}}
            </div><!-- Título -->
            <div class="panel-body">
                <b>Telefone: </b>@foreach( $pessoa->telefone as $telefone) ( {{ $telefone->ddd }} ) {{ $telefone->telefone }} @endforeach
            </div><!-- Conteúdo -->
        </div>
    </div>

</div>


@endsection