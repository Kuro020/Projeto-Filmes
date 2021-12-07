<?php
include_once("header.php");
?>
<div class="card">
  <div class="card-body bg-info formulario">
    <form class="row g-3 formulario" method="POST" action="../controller/inserirFilmes.php" id="formulario">
   
    <div class="col-md-6">
    <label for="inputFilme" class="form-label">Filme</label>
    <input type="text" class="form-control" id="inputFilme" name="nomeFil">
  </div>

  <div class="col-md-6">
    <label for="inputImagemFilme" class="form-label">Imagem do Filme </label>
    <input type="text" class="form-control" id="inputImagemFilme"name="imgFil">
  </div>
  <div class="col-md-6">
    <label for="inputduracaoFil" class="form-label">Duração do Filme </label>
    <input type="text" class="form-control" id="inputduracaoFil"name="duracaoFil">
  </div>

  <div class="col-md-6">
    <label for="precoFil" class="form-label">Preço do Filme</label>
    <input type="text" class="form-control" id="precoFil" name="precoFil">
  </div>

  <div class="col-md-6">
    <label for="inputgeneroFil" class="form-label">Genêro do Filme </label>
    <input type="text" class="form-control" id="inputgeneroFil"name="generoFil">
  </div>
  <div class="col-md-6">
    <label for="inputestreiaFil" class="form-label">Estreia </label>
    <input type="text" class="form-control" id="inputestreiaFil"name="estreiaFil">
  </div>
        
  <div class="col-md-6">
    <label for="inputdirecaoFil" class="form-label">Diretor </label>
    <input type="text" class="form-control" id="inputdirecaoFil"name="direcaoFil">
  </div>

  <div class="col-md-6">
    <label for="roteiroFil" class="form-label">Roteiro</label>
    <input type="text" class="form-control" id="roteiroFil" name="roteiroFil">
  </div>

  <div class="col-md-6">
    <label for="inputclassificacaoFil" class="form-label">Classificação </label>
    <input type="text" class="form-control" id="inputclassificacaoFil"name="classificacaoFil">
  </div>
  <div class="col-md-6">
    <label for="inputavaliacaoFil" class="form-label">Avaliação </label>
    <input type="text" class="form-control" id="inputavaliacaoFil"name="avaliacaoFil">
  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
    </div>
</form>
<?php
include_once("footer.php");
?>