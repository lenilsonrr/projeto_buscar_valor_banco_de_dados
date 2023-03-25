<?php
include_once('conexao.php');

if(isset($_POST['update'])){
  
  $id = $_POST['id'];
  $cod = $_POST['cod'];
  $desc = $_POST['desc'];
  $valor = $_POST['valor'];
 
  $sqlUpdate = "UPDATE produtos SET cod='$cod', descri='$desc', valor='$valor' WHERE id='$id'";
  
  $result = $conexao->query($sqlUpdate);
  
}
header('Location: estoque.php');

?>