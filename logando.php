<html>
<head>
	<script type="text/javascript">
		function loginOK_aluno(){
			setTimeout("window.location = 'logado_aluno.php'",1000);
		}
		function loginOK_professor(){
			setTimeout("window.location = 'logado_professor.php'",1000);
		}
		function loginOK_adm(){
			setTimeout("window.location = 'logado_adm.php'",1000);
		}
		function loginFAIL(){
			setTimeout("window.location = 'login.html'",1000);
		}
	</script>
	<title></title>
</head>
<body>
<?php
require_once'conexao.php';
$login = $_POST['login'];
$senha = $_POST['senha'];

	$consulta2 = mysql_query("select * from alunos where login = '$login' and senha = '$senha';");
	$cnt2 = mysql_num_rows($consulta2);
	if($cnt2>0){
	session_start("alunos");//inicia a sessão
		$_SESSION['alunos'] = "alunos";
		$_SESSION['login'] = $_POST['login'];
	    $_SESSION['senha'] = $_POST['senha'];	
	echo "<script>loginOK_aluno()</script>";
	}else{
		$consulta3 = mysql_query("select * from professores where login = '$login' and senha = '$senha';");
		$cnt3 = mysql_num_rows($consulta3);
		if($cnt3>0){
		session_start("professores");//inicia a sessão
			$_SESSION['professores'] = "professores";
			$_SESSION['login'] = $_POST['login'];
	    	$_SESSION['senha'] = $_POST['senha'];	
		echo "<script>loginOK_professor()</script>";
		}else{
			$consulta4 = mysql_query("select * from adm where login = '$login' and senha = '$senha';");
			$cnt4 = mysql_num_rows($consulta4);
			if($cnt4>0){
			session_start("adm");//inicia a sessão
				$_SESSION['adm'] = "adm";
				$_SESSION['login'] = $_POST['login'];
	    		$_SESSION['senha'] = $_POST['senha'];	
			echo "<script>loginOK_adm()</script>";
			}else{
				echo "<script>loginFAIL()</script>";
			}
		}
	}


?>
</body>
</html>