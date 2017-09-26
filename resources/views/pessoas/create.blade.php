@extends('template.app')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <h3>Novo contato</h3>
    </div>
    <div class="col-xs-12 col-md-6 well">
        <form method="POST" action="{{ url('/pessoas/store') }}">
           <!-- {{ csrf_token() }}  É um token -->
            {{ csrf_field() }}  <!-- cria um campo hidden e um token para enviar o formulário com um pouco mais de segurança, pelo menos evitando alguns robots  -->
            <div class="form-group">
                <input type="text" name="nome" placeholder="Nome" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="ddd" placeholder="DDD" maxlength="2" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="telefone" maxlength="10" placeholder="Telefone" class="form-control">
            </div>
            <button type="submit" class="btn-primary btn btn-large btn-block">Salvar</button>
        </form>
    </div>
</div>

<script>

    var fone = document.querySelector('input[name="telefone"]');
    var ddd = document.querySelector('input[name="ddd"]');

    fone.addEventListener( 'keyup' , function(){
        this.value = maskFone( this.value );
    });
     ddd.addEventListener( 'keyup' , function(){
        this.value = maskFone( this.value );
    });
    function maskFone(num){
        num = num.replace(/\D/g,"");
        num = num.replace(/(\d)(\d{4})$/,"$1-$2");
        return num;
    }

</script>

@endsection