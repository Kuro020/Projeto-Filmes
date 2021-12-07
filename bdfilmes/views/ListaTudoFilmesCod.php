<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFilmes.php");
?>
<div class="container m-5 p-5">
    <form action="listaTudoFilmesCod.php" method="GET">
        <div class="row mb-3">
            <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código do Filme: </label>
            <div class="col-sm-3">
                <input type="number" name="codFil" class="form-control" id="inputCod" required>
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-dark">Buscar</button>
            </div>
        </div>
    </form>
</div>
<table class="table bg-info ">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Imagem</th>
            <th scope="col">Filme</th>
            <th scope="col">Genêro</th>
            <th scope="col">Preço</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codFilme = isset($_GET['codFil']) ? $_GET['codFil'] : "0";
        if ($codFilme > 0) {
            $filmes = listaTudoFilmesCod($conexao, $codFilme);
            if ($filmes) {
        ?>
                <tr>
                    <th scope="row"><?= $filmes['codFil'] ?></th>
                    <th scope="row"><img src="img/<?=$filmes['imgFil']?>" width="50px"class="img-fluid rounded-start" ></th>
                    <td><?= $filmes['nomeFil'] ?></td>
                    <td><?= $filmes['generoFil'] ?></td>
                    <td><?= $filmes['precoFil'] ?></td>
                    <td>
                        <form action="../controller/deletarFilmes.php" method="POST">
                            <input type="hidden" name="codFilDeletar" value="<?= $filmes['codFil'] ?>">
                            <button type="submit" class="btn-small btn-danger">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <form action="formAlterarFilmes.php" method="POST">
                            <input type="hidden" name="codFilAlterar" value="<?= $filmes['codFil'] ?>">
                            <button type="submit" class="btn-small btn-success">Alterar</button>
                        </form>
                    </td>
                </tr>
        <?php
            }
        }
        ?>

    </tbody>
</table>
<?php
include_once("footer.php");
?>