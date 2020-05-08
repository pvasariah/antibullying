<!DOCTYPE html>
<html>
<head>
	<title>Banco</title>
</head>
<body>

</body>
</html>

<?php

include_once 'conexao.php';
nome$_POST

mysqli_select_db($conexao, "antibullying");

 $sql_inserir = "INSERT INTO aluno (matricula,nome,turma,email,senha) VALUES (555, 'Herculano', '3ano', 'ggggggggg', 'g76u7')";
 if (mysqli_query($conexao, $sql_inserir)) {
 	echo "<h4>Registro Inserido</h4>";
 	} else {
    	echo "<h4>Erro ao Inserir</h4>";
    	mysqli_error();
 	}
 mysqli_close($conexao);


?>