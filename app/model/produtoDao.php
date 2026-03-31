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
        $sql = 'SELECT * FROM produto';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else {
            return [];
        }
    }
    public function update (Produto $produtos){
        $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$produtos->getNome());
        $stmt->bindValue(2,$produtos->getDescricao());
        $stmt->bindValue(3,$produtos->getId());

        $stmt -> execute();

    }
    public function delete ($id){
        $sql = 'DELETE FROM produto WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

    }
}