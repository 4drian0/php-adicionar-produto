<?php

namespace App\Model;

class ProdutoDao{

    public function create (Produto $produto){

        $sql = 'INSERT INTO produto(nome, descricao) VALUES(?,?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$produto->getNome());
        $stmt->bindValue(2,$produto->getDescricao());

        $stmt->execute();
 
    }
    public function read (){

    }
    public function update (Produto $produtos){

    }
    public function delete ($id){

    }
}