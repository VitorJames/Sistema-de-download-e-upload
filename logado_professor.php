<html>
<head>
	<meta charset="utf-8">
  <title>Bem vindo.</title>
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
							<a href="deletar_arq_prof.php"><button class="btn-bar">Deletar arquivos</button></a>
							<a href="excluir_alunos.php"><button class="btn-bar">Excluir alunos</button></a>	
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
session_start("professores");
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["professores"]) ){
	header("Location:login.html");
	exit;
}else{

}
echo "<br><br><br><br><br><center>
<form method='post' action='recebe_upload.php' enctype='multipart/form-data'>
<label><strong><font size='5' color='white'>Arquivo:</font></strong></label>
<input type='file' name='arquivo' class='inp-file'/><br>
<select name='turma' class='sel'>
<option value='1'>1º ano</option>
<option value='2'>2º ano</option>
<option value='3'>3º ano</option>
</select><br><br>
<input type='submit' value='Enviar' class='env-button'/>
</form></center>";
?>
</div>
</body>
</html>