
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login sistema</title>
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
      border: none;
      outline: none;
      border-radius: 10px;
      font-size: 15px;
      padding-block: 10px;
    }
    
    .btn:hover{
      background: blue;
    }
    
  </style>
  <body>
    <div class='box'>
      <form action="testeLoginVenda.php" method="post">
        <fieldset>
          <legend>Bem vindo</legend>
          <br>
          <br>
          <div class="box-input">
            <label for="login">Login</label>
            <br>
            <br>
            <input type="text" name="login" id ="login" class="inputUser" required>
          </div>
          <br>
          <div class="box-input">
            <label for="senha">Senha</label>
            <br>
            <br>
            <input type="password" name="senha" id="senha" class="inputUser" required>
          </div>
          <br>
          <br>
          <input class="btn" type="submit" name="submit" id="submit">
          <br><br>
        </fieldset>
      </form>
    </div>
  </body>
</html>