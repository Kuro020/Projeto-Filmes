<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFilmes.php");
?>
<div class="card-body">
        <h1 class="d-flex justify-content-center">FILMES EM CARTAZ</h1>
    </div>
<?php
$filmes = listaTudoFilmes($conexao);
foreach ($filmes as $filme) :
?>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="img/<?= $filme['imgFil'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $filme['nomeFil'] ?></h5>
                    <p class="card-text"><?= $filme['estreiaFil'] ?> / <td><?= $filme['duracaoFil'] ?></td> / <?= $filme['generoFil'] ?></p>
                    <p class="card-text"><small class="text-muted">Direção:</small><?= $filme['direcaoFil'] ?></p>
                    <p class="card-text"><small class="text-muted">Roteiro:</small><?= $filme['roteiroFil'] ?></p>
                    <div class="d-flex flex-row">
                        <form action="formAlterarFilmes.php" method="POST">
                            <input type="hidden" name="codFilAlterar" value="<?= $filme['codFil'] ?>">
                            <button type="submit" class="btn-small btn-primary">Alterar</button>
                        </form>
                        <form action="../controller/deletarFilmes.php" method="POST">
                            <input type="hidden" name="codFilDeletar" value="<?= $filme['codFil'] ?>">
                            <button type="submit" class="btn-small btn-dark">Deletar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
endforeach;
?>

</tbody>
</table>
<?php
include_once("footer.php");
?>