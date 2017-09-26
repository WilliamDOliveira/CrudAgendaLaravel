@extends('template.app')

@section('content')

<div class="row">
    <div class="col-xs-12" margin-bottom>
        <h2>Começa a usar nossa Agenda!</h2>
    </div>

    <a href="{{ url('/pessoas/') }}" link-none  align-center margin-bottom class="col-xs-12 col-sm-12 btn-lg btn-primary">
        <div class="">
            <h2 margin >Listar Contato</h2>
        </div>
    </a>

    <a href="{{ url('/pessoas/novo') }}"  link-none align-center margin-bottom class="col-xs-12 col-sm-12 btn-lg btn-success">
        <div class="">
            <h2 margin >Criar Contato</h2>
        </div>
    </a>

</div>


@endsection