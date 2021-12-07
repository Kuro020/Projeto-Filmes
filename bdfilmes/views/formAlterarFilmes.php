<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFilmes.php");
?>
<div class="card">
    <div class="card-body">
        <form method="POST" action="../controller/alterarFilmes.php">
            <?php
            $codFilme = $_POST['codFilAlterar'];
            $filme = listaTudoFilmesCod($conexao, $codFilme);
            ?>
            <p>Código <input type="text" name="codFil" value="<?= $filme['codFil'] ?>"></p>
            <p>Filme <input type="text" name="nomeFil" value="<?= $filme['nomeFil'] ?>"></p>
            <p>Imagem <input type="text" name="imgFil" value="<?= $filme['imgFil'] ?>"></p>
            <p>Duração do Filme <input type="text" name="duracaoFil" value="<?= $filme['duracaoFil'] ?>"></p>
            <p>Preço do Filme <input type="text" name="precoFil" value="<?= $filme['precoFil'] ?>"></p>
            <p>Genêro do Filme <input type="text" name="generoFil" value="<?= $filme['generoFil'] ?>"></p>
            <p>Estreia <input type="text" name="estreiaFil" value="<?= $filme['estreiaFil'] ?>"></p>
            <p>Diretor <input type="text" name="direcaoFil" value="<?= $filme['direcaoFil'] ?>"></p>
            <p>Roteiro <input type="text" name="roteiroFil" value="<?= $filme['roteiroFil'] ?>"></p>
            <p>Classificação <input type="text" name="classificacaoFil" value="<?= $filme['classificacaoFil'] ?>"></p>
            <p>Avaliação <input type="text" name="avaliacaoFil" value="<?= $filme['avaliacaoFil'] ?>"></p>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>
<?php
include_once("footer.php");
?>