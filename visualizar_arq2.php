<html>
<head>

	<title>Visualizar</title>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])  || !isset($_SESSION["alunos"]) ){
	header("Location:login.html");
	exit;
}else{

}
$dir = '2/';
$pasta= opendir($dir);
while ($arquivo = readdir($pasta)){
if($arquivo != '.' && $arquivo != '..'){	
echo $arquivo."<br></a>";
echo "
<form action='2/$arquivo' method='POST'>
<input type='submit' value='Download'>
</form>";
}
}





?>
<a href="javascript:window.history.go(-2)">Voltar</a>
</body>
</html>