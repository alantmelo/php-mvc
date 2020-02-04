<?php
namespace Model;
use Core;
class Clientes extends Core\DB{
    
    private $id;
    private $nome;
    private $endereco;
    public function __construct() {
        parent::__construct();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    public function getEndreco(){
        return $this->endereco;
    }
    
    
    public function listClientes(){
        $stm = $this->conn->prepare("SELECT * FROM clientes");
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    }

    public function createCliente()
    {
        $sql = $this->conn->prepare("INSERT INTO clientes (nome, endereco) VALUES ('{$this->getNome()}', '{$this->getEndreco()}')");
        $result = $sql->execute();
        return $result;
    }
    
}
