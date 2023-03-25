<?php 
session_start();
if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])){
  $loginVal = 'fumaral';
  $senhaVal = 1;
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  
  if($loginVal == $login && $senhaVal == $senha){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('Location: sistema.php');
    
  }
  else{
    session_destroy();
    header('Location: login.php');
    
}
}else{
  header('Location: login.php');
}
?>