<?php

namespace Controller;

use Core\Controller;
use Model\Clientes;
class ClientesController extends Controller
{

    function IndexAction(){
        $dados = array();
        $dados["mensagem"] = "Tela inicial dos clientes";
        $this->result("clientes", "index", $dados);
    }
    
    function ListaAction(){
        $cliente = new \Model\Clientes();
        $dados["clientes"] = $cliente->listClientes();
        $this->result("clientes", "lista", $dados);
    }

    function CreateAction()
    {
        if(isset($_POST['nome']))
        {

            $cliente = new Clientes();
            $cliente->setNome($_POST['nome']);
            $cliente->setEndereco($_POST['endereco']);
            $result = $cliente->createCliente();
            if($result)
            {
                echo "Cliente ".$cliente->getNome() ." criado com sucesso!</br>";
            }else
            {

                echo "Erro ao salvar!</br>";
            }
        }
        $this->result("clientes", "create", []);
    }
    
    
    
}
