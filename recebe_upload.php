<html>
<head>
	<meta charset="utf-8">
  <title>Upload</title>
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
require_once'conexao.php';
session_start();
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["professores"])){
	header("Location:login.html");
	exit;
}else{

}
error_reporting(0);
$turma = $_POST['turma'];

if($turma == 1){
	$_UP['pasta'] = '1/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 1024 * 10; 
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf','docx','doc','ppt','pptx','rar','zip');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = '<br><center><strong><font size="5" color="white">Não houve erro.</font></strong></center>';
$_UP['erros'][1] = '<br><center><strong><font size="5" color="white">O arquivo no upload é maior do que o limite permitido.</font></strong></center>';
$_UP['erros'][2] = '<br><center><strong><font size="5" color="white">O arquivo ultrapassa o limite de tamanho especifiado no HTML.</font></strong></center>';
$_UP['erros'][3] = '<br><center><strong><font size="5" color="white">O upload do arquivo foi feito parcialmente.</font></strong></center>';
$_UP['erros'][4] = '<br><center><strong><font size="5" color="white">Não foi feito o upload do arquivo.</font></strong></center>';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("<center><br><br><br><br><br><center><strong><font size='5' color='white'>Não foi possível fazer o upload, erro: <br>" . $_UP['erros'][$_FILES['arquivo']['error']]."</font></strong></center>");
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>Por favor, envie arquivos com as seguintes extensões: pdf, doc, docx, ppt, pptx, zip.</font></strong></center>";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>O arquivo enviado é muito grande, envie arquivos de até 2Mb.</font></strong></center>";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "<center><br><br><br><br><br><br><br><center><strong><font size='5' color='white'>Upload efetuado com sucesso!</font></strong></center>";
echo "<br /><a href='deletar_arq_prof.php'>Clique aqui para visualizar os arquivos.</a>";
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>Não foi possível enviar o arquivo, tente novamente.</font></strong></center>";
}
 
}
 
$tempo = $_POST['tempo'];

}elseif ($turma == 2) {
	$_UP['pasta'] = '2/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 1024 * 10; 
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf','docx','doc','ppt','pptx','rar','zip');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = '<br><center><strong><font size="5" color="white">Não houve erro.</font></strong></center>';
$_UP['erros'][1] = '<br><center><strong><font size="5" color="white">O arquivo no upload é maior do que o limite permitido.</font></strong></center>';
$_UP['erros'][2] = '<br><center><strong><font size="5" color="white">O arquivo ultrapassa o limite de tamanho especifiado no HTML.</font></strong></center>';
$_UP['erros'][3] = '<br><center><strong><font size="5" color="white">O upload do arquivo foi feito parcialmente.</font></strong></center>';
$_UP['erros'][4] = '<br><center><strong><font size="5" color="white">Não foi feito o upload do arquivo.</font></strong></center>';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("<center><br><br><br><br><br><center><strong><font size='5' color'white'>Não foi possível fazer o upload, erro: <br>" . $_UP['erros'][$_FILES['arquivo']['error']]."</font></strong></center>");
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "<center><br><br><br><br><br><br><br><center><strong><font size='5' color='white'>Por favor, envie arquivos com as seguintes extensões: pdf, doc, docx, ppt, pptx, zip.</font></strong></center>";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "<center><br><br><br><br><br><br><br><center><strong><font size='5' color='white'>O arquivo enviado é muito grande, envie arquivos de até 2Mb.</font></strong></center>";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>Upload efetuado com sucesso!</font></strong></center>";
echo "<br /><a href='deletar_arq_prof.php'>Clique aqui para visualizar os arquivos.</a>";
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>Não foi possível enviar o arquivo, tente novamente.</font></strong></center>";
}
 
}
 
$tempo = $_POST['tempo'];
}elseif($turma == 3){
	$_UP['pasta'] = '3/';
 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 1024 * 10; 
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('pdf','docx','doc','ppt','pptx','rar','zip');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = '<br><center><strong><font size="5" color="white">Não houve erro.</font></strong></center>';
$_UP['erros'][1] = '<br><center><strong><font size="5" color="white">O arquivo no upload é maior do que o limite permitido.</font></strong></center>';
$_UP['erros'][2] = '<br><center><strong><font size="5" color="white">O arquivo ultrapassa o limite de tamanho especifiado no HTML.</font></strong></center>';
$_UP['erros'][3] = '<br><center><strong><font size="5" color="white">O upload do arquivo foi feito parcialmente.</font></strong></center>';
$_UP['erros'][4] = '<br><center><strong><font size="5" color="white">Não foi feito o upload do arquivo.</font></strong></center>';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("<center><br><br><br><br><br><center><strong><font size='5' color='white'>Não foi possível fazer o upload, erro: <br>" . $_UP['erros'][$_FILES['arquivo']['error']]."</font></strong></center>");
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
echo "<br><br><br><br><br><center><strong><font size='5' color='white'>Por favor, envie arquivos com as seguintes extensões: pdf, doc, docx, ppt, pptx, zip.</font></strong></center>";
}
 
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "<br><br><br><br><br><center><strong><font size='5' color='white'>O arquivo enviado é muito grande, envie arquivos de até 2Mb.</font></strong></center>";
}
 
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>Upload efetuado com sucesso!</font></strong></center>";
echo "<br /><a href='deletar_arq_prof.php'>Clique aqui para visualizar os arquivos.</a>";
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "<center><br><br><br><br><br><center><strong><font size='5' color='white'>Não foi possível enviar o arquivo, tente novamente.</font></strong></center>";
	}
  }
}
?>
</div>
</body>
</html>