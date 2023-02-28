<?php
    include_once 'produto.php';

    $valor = new Produto();

    $valor->Codigo=4011;

    $valor->Descricao = "CD Greatest Hits of RHCP";

    echo $valor->Codigo . "-" . $valor->Descricao;
?>