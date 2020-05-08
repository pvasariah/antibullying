 <?php   

  
    if(isset($_POST['logar']))
   {
      session_start();
$_SESSION['matricula'] = $_POST['matricula'];


$matricula_l = $_SESSION['matricula'];
$senhaLogin = $_POST['senha_l'];


 include ('conexao.php');
mysqli_select_db($conexao, "antibullying") or die ("Erro ao selecionar o Banco");

$sql = "SELECT * FROM aluno WHERE matricula ='$matricula_l' AND senha ='$senhaLogin'";
$queryLogin = mysqli_query($conexao, $sql) or die ("Erro na consulta sql");

$retorno = mysqli_num_rows($queryLogin);
if($retorno == 0){

echo "<script>
alert('Usuário ou senha inválidos')
window.location.href= 'login.html'
</script>
";

} 
    else{

 header('location:index.php');
 
    }
  	 }




   ?>