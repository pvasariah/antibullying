<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


</body>
</html>


<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "antibullying";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (mysqli_connect_errno($conexao)) {
	echo "Erro na conexão com o banco!";
 	mysql_connect_error();
}else {
	echo "Conexão realizada!";
}
?>