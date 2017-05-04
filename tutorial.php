<html>
<head>
	<title>Tutorial para iniciantes.</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
	<center>
	<div id="img1">
		<img src="img/1.png" class="img1">
	</div>
	<div id="img2">
		<img src="img/2.png">
	</div>
	<div id="img3">
		<img src="img/3.png">
	</div>
	<div id="img4">
		<img src="img/4.png">
	</div>
	<div id="imgs56">
		<img src="img/5.png">
		<img src="img/6.png">
	</div>
	<div id="img7">
		<img src="img/7.png">
	</div>
	<div id="img8">
		<img src="img/8.png">
	</div>
	<div id="img9">
		<img src="img/9.png"><br>
		<a href="logado_aluno_dados.php"><button class="con-button">Continuar</button></a><br>
	</div>
	<?php
		require_once'conexao.php';
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$turma = $_POST['turma'];
		$numero = $_POST['numero'];
		$login = $_POST['login'];

		$sql = mysql_query("insert into alunos values('$nome','$email','$senha','$turma','$numero','$login');");
	?>
	</center>
</body>
</html>