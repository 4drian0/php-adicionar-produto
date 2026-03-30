<?php
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto-> setNome('notebook DELL');
$produto-> setDescricao('i5,4gb de ram');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);