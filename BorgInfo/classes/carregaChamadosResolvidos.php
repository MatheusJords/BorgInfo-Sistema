<?php 
require "conexao.php"; 

$connect = mysqli_connect("localhost", "root", "", "test");

$SQL = "SELECT *
FROM chamados where datafechamento is not null";

$result_id = mysqli_query($connect,$SQL) or die("Erro no banco de dados!"); 
$total = mysqli_num_rows($result_id); 

if(!$total) 
    echo 'Não há chamados resolvidos no momento';
?>