
<?php
session_start("adm");
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["adm"]) ){
	header("Location:login.html");
	exit;
}else{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Professores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.png">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
</head>
<body>
	<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
					<a href="../EEEP/"><img src="img/eeeps.png" class="lg-bar"></a>
					<div id="btns">
						<center>
							<a href="cadastrar_professor.php"><button class="btn-bar-adm">Cadastrar professor</button></a>
							<a href="deletar_arq.php"><button class="btn-bar-adm">Excluir arquivos</button></a>
							<a href="logout.php"><button class="btn-bar-adm">Sair</button></a>
						</center>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<div id="inf2"><br><br><br><br><br>
	<center>
		<font size="6" color="white">Cadastro de Professores</font><br><br><br>
	<form action="cadastrando_professor.php" method="POST">
		<input type="text" name="login" placeholder="Login" required><br>
		<input type="password" name="senha" placeholder="Senha" required><br>
		<input type="submit" value="Cadastrar" class="cad-button">
	</form>
	</center>
</body>
</html>