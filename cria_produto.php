<?php
    include_once 'produto.php';

    $produto1 = new Produto();
    $produto2 = new Produto();

    $produto1->Codigo=4011;
    $produto1->Descricao = "CD Greatest Hits of RHCP";
    
    $produto2->Codigo=4012;
    $produto2->Descricao = "CD Greatest Hits of SOAD";

    $produto1->ImprimeEtiqueta();
    $produto2->ImprimeEtiqueta();

    // html forms
    
?>