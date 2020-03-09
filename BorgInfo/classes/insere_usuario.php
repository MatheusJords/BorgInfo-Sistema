<?php 
    require "conexao.php"; 
    // Inicia sessões 
    session_start(); 

    $connect = mysqli_connect("localhost", "root", "", "test");

    // Recupera o login 
    $usuario = isset($_POST["usuario"]) ? addslashes(trim($_POST["usuario"])) : FALSE; 
    // Recupera a senha, a criptografando em MD5 
    $senha = isset($_POST["senha"])   ? md5(trim($_POST["senha"])) : FALSE;
    
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
$SQL = "Insert into users
values('$senha','$usuario');"; 
$result_id = mysqli_query($connect,$SQL) or die("Erro no banco de dados!"); 
 
header("Location:../cadastro.php");

?>