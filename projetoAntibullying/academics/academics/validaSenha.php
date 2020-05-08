
<?php

session_start();

$matriculaS = $_SESSION['matriculaS'];
$senhaS = $_POST['novaSenha'];
$senhaConf = $_POST['senhaConf'];

include 'conexao.php';

mysqli_select_db($conexao, "antibullying") or die("Erro na conexão");
if ($senhaS == $senhaConf) {
$sqlUp = "UPDATE aluno SET senha = '$senhaS'
       WHERE matricula = '$matriculaS'";
 
  if (mysqli_query($conexao, $sqlUp)) {
    echo "<script>
         alert ('Senha alterada!');
          window.location.href= 'index.php';
          </script>";
   }
 }
   else {
      echo "<center><h3>ERRO: </h3></center>";
      mysqli_error($conexao);
    }
    
