<?php   

  
    if(isset($_POST['enviar_m']))
   {
      session_start();
$_SESSION['matriculaS'] = $_POST['matriculaS'];


$matricula_v = $_SESSION['matriculaS'];


 include ('conexao.php');
mysqli_select_db($conexao, "antibullying") or die ("Erro ao selecionar o Banco");

$sql = "SELECT * FROM aluno WHERE matricula ='$matricula_v'";
$queryLogin = mysqli_query($conexao, $sql) or die ("Erro na consulta sql");

$retorno = mysqli_num_rows($queryLogin);
if($retorno == 0){

echo "<script>
alert('Matricula inválida')
window.location.href= 'formMatricula.php'
</script>
";

} 
    else{

 header('location:formSenha.php');
 
    }
  	 }




   ?>