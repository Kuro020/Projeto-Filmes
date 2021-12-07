<?php
include("../model/conexao.php");
include("../model/bancoFilmes.php");
include("../views/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(alterarFilmes($conexao, $codFil, $nomeFil, $imgFil, $duracaoFil, $precoFil, $generoFil, $classificacaoFil, $avaliacaoFil, $estreiaFil, $direcaoFil, $roteiroFil)){
    echo("Filme alterado com sucesso.");
}else{
    echo("Filme não alterado.");
}
include("../views/footer.php");
?>