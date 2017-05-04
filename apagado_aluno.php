<?php
session_start("alunos");
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["professores"]) ){
	header("Location:login.html");
	exit;
}else{

}
require_once'conexao.php';


$delete = $_POST['delete'];

$sql = mysql_query("delete from alunos where nome = '$delete';") or die(mysql_error());

header("Location:excluir_alunos.php")
?>