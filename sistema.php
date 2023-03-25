<?php
session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
  session_destroy();
  header('Location: login.php');
}

$log = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Sistema</title>
  <meta name="description" content="Descrição da Página">
  <meta name="keywords" content="palavras-chave, separadas por vírgulas">
  <meta name="author" content="Nome do Autor">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  body {
    background: gray;
    color: white;
    text-align: center;
  }

  .box {
    background: rgba(0, 0, 0, 0.4);
    display: inline-block;
    padding: 40px;
    border-radius: 10px;
  }

  .inputUser {
    height: 100px;
    max-width: 200px;
    font-size: 60px;
  }

  .btn {
    width: 100%;
    background: dodgerblue;
    text-decoration: none;
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 10px;

  }

  .btn-sair {
    text-decoration: none;
    display: inkine-flex;
    padding: 10px;
    background: orangered;
    color: white;
  }
  .desc{
    display: block;
    text-align: center;
    color: black;
    font-weight: bold;
    font-size: 18px;
  }

  .cod{
    display: block;
    text-align: center;
    color: black;
    font-weight: bold;
    font-size: 40px;
  }

  .valor {
    display: block;
    text-align: center;
    color: black;
    text-shadow: 1px 2px white;
    font-weight: bold;
    font-size: 150px;
    margin-top: -20px;
  }
</style>

<body>
  <a href="sair.php" class="btn-sair">Sair</a>
  <?php
  echo "<h1>Bem vindo <u>$log</u></h1>";
  ?>

  <div class="box">
    <form action="sistema.php" method="post">
      <label for="cod">Digite o código</label>
      <br>
      <br>
      <input type="text" name="cod" id="cod" class="inputUser" required>
      <br>
      <br>
      <input type="submit" name="submit" id="submit" class="btn">
    </form>

  </div>

  <div class="resultado">

    <div class="resultado">
      <?php
      if (isset($_POST['submit'])) {
        $cod = $_POST['cod'];
        include_once('conexao.php');

        $sqlFind = "SELECT * FROM produtos WHERE cod='$cod'";

        $result = $conexao->query($sqlFind);
        if ($result->num_rows > 0) {
          while ($user_data = mysqli_fetch_assoc($result)) {

            $cod = $user_data['cod'];
            $desc = $user_data['descri'];
            $valor = $user_data['valor'];

          }
       
          echo "<h1 class='desc'>$desc</h1>";

          echo "<h1 class='cod'>cod: $cod</h1>";

          echo "<h1 class='valor'>R$: $valor</h1>";

        }else{
          echo "<h1 class='cod'>Não Existe</h1>";
        }

      }



      ?>
    </div>
</body>

</html>