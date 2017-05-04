<html>
<head>
	<title></title>
	<script type="text/javascript">
		function loginOK(){
			setTimeout("window.location = 'logado_aluno_dados.php'",1000);
		}
		function loginFAIL(){
			setTimeout("window.location = 'login_conta.html'",1000);
		}
	</script>
</head>
<body>


</body>
</html>
<?php
require_once'conexao.php';
$login = $_POST['login'];
$senha = $_POST['senha'];


$consulta = mysql_query("select * from alunos where login = '$login' and senha = '$senha';");
$contador = mysql_num_rows($consulta);


if($contador > 0){
	session_start("alunos");//inicia a sessão
		$_SESSION['alunos'] = "alunos";
		$_SESSION['login'] = $_POST['login'];
	    $_SESSION['senha'] = $_POST['senha'];
	   echo "<script>loginOK()</script>";
}else{
	echo "<script>loginFAIL()</script>";
}


?>

</body>
</html>