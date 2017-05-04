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
<body bgcolor="#4d4d4d">
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
<div id="inf2"><br><br><br><br><br>
	<center>
		<font size='6' color='white'>Lista de Arquivos</font><br>
<?php
echo"";
session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["professores"])){
	header("Location:login.html");
	exit;
}else{

}
echo"<div style='width:400px;'><p align='center'>";
$dir = '1/';
$pasta= opendir($dir);
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo "<form action='apagado_prof.php' method='POST'>
	<table border='1' style='width:300px;max-width:450px;'>
		<tr>
			<td>
				<p align='center'>
					<font size='3' color='black'>
						<strong>
							<input type='radio' name='hj' value='$arquivo'>
								<a href='1/$arquivo' >".utf8_encode($arquivo)."</a>
						</strong>
					</font>
				</p>
			</td>
		</tr>
	</table><br>";
}


}
$dir = '2/';
$pasta= opendir($dir);
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo "<form action='apagado_prof.php' method='POST'>
	<table border='1' style='width:300px;max-width:450px;'>
		<tr>
			<td>
				<p align='center'>
					<font size='3' color='black'>
						<strong>
							<input type='radio' name='hj' value='$arquivo'>
								<a href='2/$arquivo' >".utf8_encode($arquivo)."</a>
						</strong>
					</font>
				</p>
			</td>
		</tr>
	</table><br>";
}


}
$dir = '3/';
$pasta= opendir($dir);
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo "<form action='apagado_prof.php' method='POST'>
	<table border='1' style='width:300px;max-width:450px;'>
		<tr>
			<td>
				<p align='center'>
					<font size='3' color='black'>
						<strong>
							<input type='radio' name='hj' value='$arquivo'>
								<a href='3/$arquivo' >".utf8_encode($arquivo)."</a>
						</strong>
					</font>
				</p>
			</td>
		</tr>
	</table><br>";
}


}

echo "<input type='submit' value='Deletar' class='del-button'></form></p></div>";
?>
</div>
</body>
</html>