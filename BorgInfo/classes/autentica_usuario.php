<?php require "conexao.php"; 
    // Inicia sessões 
    session_start(); 

$connect = mysqli_connect("localhost", "root", "", "test");
 
// Recupera o login 
$usuario = isset($_POST["usuario"]) ? addslashes(trim($_POST["usuario"])) : FALSE; 
    // Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"])   ? trim($_POST["senha"]) : FALSE; 
 
// Usuário não forneceu a senha ou o login 
if(!$usuario || !$senha) 
{ 
    echo "Você deve digitar sua senha e login!"; 
    exit; 
} 
 
/** 
* Executa a consulta no banco de dados. 
* Caso o número de linhas retornadas seja 1 o login é válido, 
* caso 0, inválido. 
*/
$SQL = "SELECT senha , usuario
FROM users 
WHERE usuario = '$usuario'"; 
$result_id = mysqli_query($connect,$SQL) or die("Erro no banco de dados!"); 
$total = mysqli_num_rows($result_id); 
 
// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if($total) 
{ 
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
    $dados = mysqli_fetch_array($result_id); 
 
    // Agora verifica a senha 
    if(!strcmp($senha, $dados["senha"])) 
    { 
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
        $_SESSION["nome_usuario"] = stripslashes($dados["usuario"]); 
        header("Location: ../index.php"); 
        exit; 
    } 
    // Senha inválida 
    else
    { 
     echo "Senha incorreta";
    exit; 
    } 
} 
    // Login inválido 
else
{ 
    echo "O login fornecido por você é inexistente!"; 
    exit; 
} 

?>