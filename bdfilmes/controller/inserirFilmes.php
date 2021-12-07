<?php
include("../model/conexao.php");
include("../model/bancoFilmes.php");
include("../views/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(inserirFilme($conexao, $nomeFil,$duracaoFil,$precoFil,$generoFil,$classificacaoFil,$avaliacaoFil,$imgFil,$estreiaFil,$direcaoFil,$roteiroFil)){
    echo("Filme cadastrado com sucesso.");
}else{
    echo("Filme não cadastrado.");
}
include("../views/footer.php");
?>