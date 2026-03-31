<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto -> setId(1);
$produto-> setNome('Cadeira Gamer');
$produto-> setDescricao('Confortavel');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(3);
$produtoDao->read();

foreach ($produtoDao->read() as $produto) {
    echo $produto['nome'] . "\n"; 
    echo $produto['descricao'] . "\n";
}