<?php 
    require('../header.php');
    require('conexao.php'); 

    $connect = mysqli_connect("localhost", "root", "", "test");

    $assunto    = isset($_POST["assunto"])  ? trim($_POST["assunto"]) : FALSE; 
    $mensagem   = isset($_POST["mensagem"]) ? trim($_POST["mensagem"]): FALSE;
    $dtabertura = isset($_POST["mensagem"]) ? date("j/n/Y")          : FALSE;
?>

<div class="col-md-7">
    <br>
    <h2>Abrir um chamado</h2>
    <br>
    <form class="form-signin" action="criaChamado.php" method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Assunto</span>
            </div>
            <input type="name" name="assunto" class="form-control" aria-label="Assunto" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Mensagem</span>
            </div>
            <textarea class="form-control" rows="7" id="comment"  name="mensagem">
			</textarea>
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
    </form>
</div>

</div>
</div>

<?php

$total = null;
$SQL = null;
    if($mensagem)
        $SQL = "Insert into chamados(mensagem,assunto,dataabertura) 
        values('$mensagem','$assunto','$dtabertura');"; 
    
    
    $result_id = mysqli_query($connect,$SQL) or die("Erro no banco de dados!"); 
    if($mensagem)
        $total = mysqli_num_rows($result_id); 
    ?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small class="text-muted">just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            See? Just like this.
        </div>
    </div>
    
<?php

?>

?>