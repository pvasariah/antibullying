<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
</style>
<body>

</body>
</html>

<?php


  if(isset($_POST['cadastrar'])) {

	$matricula = $_POST['matricula'];
	$nome_a = $_POST['nome_a'];
	$turma= $_POST['turma'];
	$email_a = $_POST['email_a'];
	$senha_a = $_POST['senha_a'];
	$senha_Conf = $_POST['senhaConf_a'];
}

    include 'conexao.php';

    
    mysqli_select_db($conexao,"antibullying");
    if ($senha_a == $senha_Conf) {
    	
    
	$sqlInsere = "INSERT INTO aluno (matricula, nome, turma, email, senha) VALUES ('$matricula', '$nome_a', '$turma', '$email_a', '$senha_Conf')";

	 if (mysqli_query($conexao, $sqlInsere)) {

	 	echo "<center><h3> Registro inserido</h3></center>";
	 }
	 }
	 else {
      echo "<script>
         alert ('Senha invalida!');
          window.location.href= 'register.html';
          </script>";
      mysqli_error($conexao);
	 }
	mysqli_close($conexao);


?>