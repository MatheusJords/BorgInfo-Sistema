<?php require('header.php');?>
    <div class="col-md-7">
      <br>
      <h4>Abra um chamado para nossa equipe</h4>
      <button type="button" class="btn btn-primary btn-md">Abrir um chamado</button>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 offset-md-3">
      <h4>Chamados abertos</h4>
      <?php require('classes/carregaChamadosAbertos.php');?>
    </div>

    <div class="col-md-4">
      <h4>Chamados resolvidos</h4>
      <?php require('classes/carregaChamadosResolvidos.php');?>
    </div>   
  </div>
</div>
<?php require('footer.php');?>