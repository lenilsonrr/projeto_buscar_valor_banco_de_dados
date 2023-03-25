<?php


session_start();

if((!isset($_SESSION['login']) == true ) and (!isset($_SESSION['senha']) == true)){
  session_destroy();
  header('Location: loginAdm.php');

}
if(!empty($_GET['id']))
{
 include_once('conexao.php');
 $id = $_GET['id'];
 $sqlSelect = "SELECT * FROM produtos WHERE id=$id";
 
 $result = $conexao->query($sqlSelect);
 
 if($result->num_rows > 0){
   while($user_data = mysqli_fetch_assoc($result)){
    
  $cod = $user_data['cod'];
  $desc = $user_data['descri'];
  $valor = $user_data['valor'];
  
   }

 }else{
   header('Location: estoque.php');
}
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
    <a href="sairAdm.php" class="btn-volta">voltar</a>
    <div class='box'>
      <form action="saveEdit.php" method="post">
        <fieldset>
          <legend>Altere o produto</legend>
          <br>
          <br>
          <div class="box-input">
            <label for="cod">Código</label>
            <br>
            <br>
            <input type="text" name="cod" id ="cod" class="inputUser" value="<?php echo $cod ?>"required>
          </div>
          <br>
          <div class="box-input">
            <label for="desc">Descrição</label>
            <br>
            <br>
            <input type="text" name="desc" id="desc" class="inputUser" value="<?php echo $desc ?>"required>
          </div>
          <br>
          <div class="box-input">
            <label for="valor">Preço</label>
            <br>
            <br>
            <input type="text" name="valor" id="valor" class="inputUser"value="<?php echo $valor ?>" required>
          </div>
          <br>
          <input type="submit" name="update" id="update" class="btn">
          <input type="hidden" name='id' id="id" value="<?php echo $id ?>">
          <br><br>
        </fieldset>
      </form>
    </div>
  </body>
</html>