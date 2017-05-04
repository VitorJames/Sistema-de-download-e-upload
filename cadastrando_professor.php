<?php
session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
	header("Location:login.html");
	exit;
}else{

}
		require_once'conexao.php';
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$sql = mysql_query("insert into professores values('$login','$senha');");
		header("Location:logado_adm.php");
?>