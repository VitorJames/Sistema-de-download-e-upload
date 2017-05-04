<html>
<head>
	<meta charset="utf-8">
  <title>Lista de Arquivos</title>
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
							<a href="logado_professor.php"><button class="btn-bar">Voltar</button></a>	
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
echo"<br><br><br><br><br><center><font size='6' color='white'>Lista de Alunos</font><br><br>";
session_start("alunos");
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["professores"]) ){
	header("Location:login.html");
	exit;
}else{

}
echo "<meta charset='utf-8'>";
require_once'conexao.php';
$sql = mysql_query("select * from alunos");
while($resultado = mysql_fetch_array($sql)){
	echo "<form action='apagado_aluno.php' method='POST'>";
	$delete = $resultado['nome'];	
	echo "<div style='width:400px;height:auto;'>
	<table border='1' style='width:300px;max-width:450px;'>
		<tr>
			<td>
				<p align='center'>
					<input type='radio' value='$delete' name='delete'>
					<font size='3' color='black'>
						<strong>";
							echo 'Nome: '.$resultado['nome'].' | ';
							echo '&nbspTurma: '.$resultado['turma'].' | ';
							echo '&nbspNúmero: '.$resultado['numero'].'
						</strong>
					</font>
				</p>
			</td>
		</tr>
	</table>
	</div><br>';
}

echo "<input type='submit' value='Apagar' class='del-button'></form></form></center>";
?>
</div>
</body>
</html>