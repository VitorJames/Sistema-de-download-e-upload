<?php
session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])  || !isset($_SESSION["alunos"]) ){
	header("Location:login.html");
	exit;
}else{

}
?>
<html>
<head>
	<meta charset="utf-8">
  <title>Arquivos da sua turma.</title>
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
<body bgcolor="#4d4d4d">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
					<a href="index.html"><img src="img/eeeps.png" class="lg-bar"></a>
					<div id="btns">
						<center>	
							<a href="logout.php"><button class="btn-bar">Sair</button></a>		
						</center>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<div id="inf2">
<?php
require_once'conexao.php';
$login = $_SESSION['login'];
$senha = $_SESSION['senha'];

$sql = mysql_query("select * from alunos where login like '$login' and senha like '$senha';");
while ($resultado = mysql_fetch_array($sql)) {
	$turma = $resultado['turma'];
	}
if($turma == 1){
$dir = '1/';
$pasta= opendir($dir);
echo"<br><br><br><br><center><h1><font color='white'>Arquivos do 1º de Informática</font></h1></center><br><br>";
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo "<center><strong><font size='4' color='black'>".utf8_encode($arquivo)."</font></strong><br>";
echo "<form action='1/$arquivo' method='POST'>
<input type='submit' value='Download'>
</form></center>";
echo "<hr size='1' color='#dadada' width='300px'>";
}
}
}elseif($turma == 2){
$dir = '2/';
$pasta= opendir($dir);
echo"<br><br><br><br><center><h1><font color='white'>Arquivos do 2º de Informática</font></h1></center><br><br>";
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo "<center><strong><font size='4' color='black'>".utf8_encode($arquivo)."</font></strong><br>";
echo "<form action='2/$arquivo' method='POST'>
<input type='submit' value='Download'>
</form></center>";
echo "<hr size='1' color='#dadada' width='300px'>";
}
}
}elseif ($turma == 3) {
$dir = '3/';
$pasta= opendir($dir);
echo"<br><br><br><br><center><h1><font color='white'>Arquivos do 3º de Informática</font></h1></center><br><br>";
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo "<center><strong><font size='4' color='black'>".utf8_encode($arquivo)."</font></strong><br>";
echo "<form action='3/$arquivo' method='POST'>
<input type='submit' value='Download' class='con-button'>
</form></center>";
echo "<hr size='1' color='#dadada' width='300px'>";
}
}
}
?>
</div>
</body>
</html>