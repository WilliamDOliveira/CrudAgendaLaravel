<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Declarando o model que está sendo usado
use App\Pessoa;//Chamando classe pessoa
use App\Telefone;

class PessoasController extends Controller
{

    private $telefones_controller;//injeção de dependência

    private $pessoa;//injeção e instanciação no construtor

    public function __construct( TelefonesController $telefones_controller ){
        $this->telefones_controller = $telefones_controller;//injeção de dependência
        $this->pessoa = new Pessoa();
    }

    public function index(){
        // $list_pessoas = Pessoa::all();//Classe pessoa e metodo estatico para acessar sem precisar instanciar a classe
        //esse ::all consigo pegar todos os valores
        //===============
        // return view( view: 'pessoas.index', [
        //     'pessoas' => $list_pessoas
        // ] );
        //===============
        //Estou retornando a view, estou pegando a url, pasta e arquivo, mas ao invés de separar por / eu uso .
        //em seguida a função recebe um array com chave e valor
        //como eu espero retornar um valor, esse array em teoria deve conter um resultado de uma query por isso foi feito assim
        //return view('pessoas.index', ['pessoas' => Pessoa::all() ]);
        
        return view('pessoas.index', ['pessoas' => Pessoa::all() ]);
    }

    public function novoView(){
        return view('pessoas.create');
    }

    public function store( Request $request ){
        //Ele está criando isso quando faz o post :: array(2) { ["_token"]=> string(40) "Y1dNEfhP3Zda7vTuikozy10AYROBTLOMTFA8Upe5" ["nome"]=> string(4) "NomeEnviado" }
        // var_dump( $request->all() );

        //Aqui está retornando o obj que foi salvo no banco -->  Pessoa::create( $request->all() );
        $pessoa = Pessoa::create( $request->all() );
        
        if( $request->ddd && $request->telefone ){
            $telefone = new Telefone();
            //Esse request é o formulário preenchido na view
            $telefone->ddd = $request->ddd;
            $telefone->telefone = $request->telefone;
            $telefone->pessoa_id = $pessoa->id;
            $this->telefones_controller->store( $telefone );
        }
        
        //Aqui ele faz um redirect e em seguida cria uma variável de sessão que pode ser utilizada para dar um response ao formulário
        return redirect("/pessoas")->with("message", "Pessoa criada com sucesso!");
         
    }

    public function editarView( $id ){
        // var_dump( $id );
        // var_dump( $this->pessoa->find( $id )->nome );//Estou usando o eloquente para fazer uma busca por id em pessoa
        return view( 'pessoas.edit' , [
            'pessoa' => $this->getPessoa( $id )
        ] );
    }

    public function update( Request $request ){
        $pessoa = $this->getPessoa( $request->id );//pega pessoa por id
        $pessoa->update( $request->all() );//atualiza pessoa
        return redirect("/pessoas")->with("message", "Pessoa atualizada com sucesso!");
    }

    protected function getPessoa( $id ){
        return $this->pessoa->find( $id );
    }

    public function delete( Request $request ){
        $pessoa_id = $this->getPessoa( $request->id );

        $delete = $pessoa_id->delete();
        if( $delete ){
            return redirect('/pessoas');
        }

        return view('pessoas.delete');
        
    }

}//@endClass
