<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Acesse sua conta.</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body background="img/11258734_820511991368010_1499879585_o.jpg">
  	<center>
  		<img src="img/eeeps.png" class="lg">
        <div class="wrapper">
        <div class="container">
		<h1>Bem Vindo.</h1>
		<form class="form" action="logando.php" method="POST">
			<input type="text" placeholder="Login" name="login" required>
			<input type="password" placeholder="Senha" name="senha" required>
			<button type="submit" class="login-button">Entrar</button><br>
		</form>
      	</div>
        </div>
	</center>
  <?php
    require_once'conexao.php';
    session_start("alunos");
    if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["alunos"]) ){
    exit;
    }else{
    header("Location:logado_aluno.php");
    }
  ?>
  </body>
</html>
