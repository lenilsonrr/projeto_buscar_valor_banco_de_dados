<?php
session_start();
if((!isset($_SESSION['login']) == true ) and (!isset($_SESSION['senha']) == true)){
  session_destroy();
  header('Location: loginAdm.php');
}

$log = $_SESSION['login'];
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Home adm</title>
    <meta name="description" content="Descrição da Página">
    <meta name="keywords" content="palavras-chave, separadas por vírgulas">
    <meta name="author" content="Nome do Autor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
    
    body{
      background: gray;
      font-family: Arial;
      text-align: center;
      color: white;
    }
    
    .box{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: rgba(0,0,0, 0.4);
      padding: 40px;
      border-radius: 10px;
      display: flex;
    }
    
    .btn-sair{
    text-decoration: none;
    display: inkine-flex;
    padding: 10px;
    background: orangered;
    color: white;
  }
    
   .btn{
     margin: 0 10px;
     text-decoration: none;
     color: white;
     border: 3px solid dodgerblue;
     border-radius: 10px;
     padding: 10px;
   }
  </style>
  <body>
     <a href="sairAdm.php" class="btn-sair">Sair</a>
     <h1>Sistema de produtos</h1>
     <br><br>
     <div class='box'>
     <a class ="btn" href="cadProduto.php">Cadastrar</a>
     <a class ="btn" href="estoque.php">Estoque<a/>
    </div>
  </body>
</html>