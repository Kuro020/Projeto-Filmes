<?php
include_once("header.php");
?>
<div class="card">
  <div class="card-body">
    <form method="POST" action="../controller/inserirFilmes.php">
        <p>Filme <input type="text" name="nomeFil"></p>
        <p>Imagem do Filme <input type="text" name="imgFil"></p>
        <p>Duração do Filme <input type="text" name="duracaoFil"></p>
        <p>Preço do Filme <input type="text" name="precoFil"></p>
        <p>Genêro do Filme <input type="text" name="generoFil"></p>
        <p>Estreia <input type="text" name="estreiaFil"></p>
        <p>Diretor <input type="text" name="direcaoFil"></p>
        <p>Roteiro <input type="text" name="roteiroFil"></p>
        <p>Classificação <input type="text" name="classificacaoFil"></p>
        <p>Avaliação <input type="text" name="avaliacaoFil"></p>
        <button type="submit">Salvar</button>
    </div>
</form>
<?php
include_once("footer.php");
?>