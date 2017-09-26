<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Declarando o model que está sendo usado
use App\Telefone;

class TelefonesController extends Controller
{
    
    public function store( Telefone $telefone ){        
        // var_dump( $telefone->ddd , $telefone->telefone );
        try{
            $telefone->save();
        }catch(\Excetion $e){
            return "ERRO: " . $e->getMessage();
        }
    }
}
