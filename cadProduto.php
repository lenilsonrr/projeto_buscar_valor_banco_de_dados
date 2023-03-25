<?php
if(isset($_POST['submit']))
{
  include_once('conexao.php');
  $cod = $_POST['cod'];
  $desc = $_POST['desc'];
  $valor = $_POST['valor'];
 $inserir = mysqli_query($conexao,"INSERT INTO produtos( cod, descri, valor) VALUES ('$cod', ' $desc', '$valor')");
  header('Location: homeAdm.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>cadastro de produtos</title>
    <meta name="description" content="Descrição da Página">
    <meta name="keywords" content="palavras-chave, separadas por vírgulas">
    <meta name="author" content="Nome do Autor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
    
    body{
      background: gray;
      font-family: Arial;
    }
    
    .box{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: rgba(0,0,0, 0.4);
      padding: 40px;
      border-radius: 10px;
    }
    
    fieldset{
      border: 4px solid dodgerblue;
      border-radius: 10px;
    }
    
    legend{
      border: 4px solid dodgerblue;
      text-align: center;
      background: dodgerblue;
      border-radius: 10px;
      font-size: 30px;
      font-weight: bold;
    }
    
    label{
      font-weight: bold;
      color: yellow;
    }
    
    .inputUser {
      outline: none;
      border: none;
      height: 25px;
      font-size: 18px;
    }
   
.btn{
  width: 100%;
    background: dodgerblue;
     text-decoration: none;
     color: white;
     border: 3px solid dodgerblue;
     border-radius: 10px;
     padding: 10px;
   }
   
   .btn-volta{
     text-decoration: none;
     color: white;
   }
   
  </style>
  <body>
    <a href="homeAdm.php" class="btn-volta">voltar</a>
    <div class='box'>
      <form action="cadProduto.php" method="post">
        <fieldset>
          <legend>Insira o produto</legend>
          <br>
          <br>
          <div class="box-input">
            <label for="cod">Código</label>
            <br>
            <br>
            <input type="text" name="cod" id ="cod" class="inputUser" required>
          </div>
          <br>
          <div class="box-input">
            <label for="desc">Descrição</label>
            <br>
            <br>
            <input type="text" name="desc" id="desc" class="inputUser" required>
          </div>
          <br>
          <div class="box-input">
            <label for="valor">Preço</label>
            <br>
            <br>
            <input type="text" name="valor" id="valor" class="inputUser" required>
          </div>
          <br>
          <input type="submit" name="submit" id="submit" class="btn">
          <br><br>
        </fieldset>
      </form>
    </div>
  </body>
</html>