<?php

namespace Controller;

use Core\Controller;
class IndexController extends Controller
{
    
    function IndexAction(){
        $dados = array();
        $dados["mensagem"] = "Olá amigo. Que tal me contratar? rs";
        $this->result("index", "index", $dados);
    }
    
    function ErrorAction(){
        $dados = array();
        $dados["mensagem"] = "Página não encontrada, mas você ainda pode me contratar! rsrs";
        $this->result("index", "error", $dados);
    }
    
    
}
