<html>
<head>
	<meta charset="utf-8">
  <title>Dados alterados com sucesso.</title>
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
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
					<a href="index.html"><img src="img/eeeps.png" class="lg-bar"></a>
					<div id="btns">
						<center>	
							<a href="logout.php"><button class="btn-bar">Voltar</button></a>		
						</center>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<div id="inf2">
<?php
session_start("alunos");
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["alunos"]) ){
	header("Location:login.html");
	exit;
}else{

}
require_once'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$turma = $_POST['turma'];
$numero = $_POST['numero'];
$login = $_POST['login'];


$sql = 
mysql_query("update alunos set nome = '$nome' , email = '$email', senha = '$senha', turma = '$turma',numero ='$numero',login = '$login'	where nome = '$nome';	");

echo "<center><br><br><br><br><br>
<h1 style='color:white;'>Dados alterados com sucesso!</h1></center>";
?>
</div>
</body>
</html>