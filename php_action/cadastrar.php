<?php
session_start();

require_once 'controller.php';

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($connection,$_POST['Codigo']);
    $nome = mysqli_escape_string($connection,$_POST['FDescricao']);
    $cargo = mysqli_escape_string($connection,$_POST['FValorProduto']);
    $dataEntregaCargo = mysqli_escape_string($connection,$_POST['FQuantidade']);
    $anosNaEmpresa = mysqli_escape_string($connection,$_POST['FPorc']);

    $sql = "INSERT INTO tbClientes(nomeCli,sobrenomeCli,emailCli,idadeCli)VALUES('$Codigo','$Descricao','$Preco','$Quantidade''$porcDesconto')";
}

if(mysqli_query($connection, $sql)){
    $_SESSION['mensagem'] = "Sucesso ao cadastrar.";

    header('Location: ../index.php');
}
else{
    $_SESSION['mensagem'] = "Erro ao cadastrar.";

    header('Location: ../index.php');
}