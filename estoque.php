<?php

session_start();
include_once('conexao.php');
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
  session_destroy();
  header('Location: loginAdm.php');
}

$log = $_SESSION['login'];

$sql = "SELECT * FROM produtos ORDER by id DESC";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Estoque</title>
  <meta name="description" content="Descrição da Página">
  <meta name="keywords" content="palavras-chave, separadas por vírgulas">
  <meta name="author" content="Nome do Autor">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  body {
    background: gray;
    font-family: Arial;
    text-align: center;
    color: white;
    margin: 0;
    display: block;
    justify-content: space-between;
  }

  .box {
    background: rgba(0, 0, 0, 0.4);
    display: inline-block;
    padding: 60px;
  }

  .btn {
    margin: 0 10px;
    text-decoration: none;
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 10px;
  }

  table,
  th,
  td {
    align-items: center;
    border: 2px solid yellow;
    padding: 8px 10px;
  }

  .btn-volta {
    display: flex;
    text-decoration: none;
    color: white;
    margin-top: 10px;
    margin-left: 30px;
  }

  .btn-icon {
    align-items: center;
    background: dodgerblue;
    padding: 2px;
  }

  .btn-lixo {
    align-items: center;
    background: red;
    padding: 2px;
  }


  th {
    color: black;
    background: white;
  }
</style>

<body>

  <a href="homeAdm.php" class="btn-volta">voltar</a>

  <h1>Sistema de produtos</h1>
  <div class='box'>

    <table>
      <tr>
        <th>id</th>
        <th>Código</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Ações</th>
      </tr>
      <tbody>
        <?php
        while ($user_data = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $user_data['id'] . "</td>";
          echo "<td>" . $user_data['cod'] . "</td>";
          echo "<td>" . $user_data['descri'] . "</td>";
          echo "<td>" . $user_data['valor'] . "</td>";
          echo "<td><a class='btn-icon' href='edit.php?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/ssv' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
</svg></a>
<a class='btn-lixo' href='delete.php?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg></a></td>";
          echo "</tr>";
        }

        ?>
      </tbody>
    </table>
  </div>
</body>

</html>