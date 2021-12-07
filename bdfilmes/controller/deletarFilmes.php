<?php
include("../model/conexao.php");
include("../model/bancoFilmes.php");
include("../views/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(deletarFilmes($conexao,$codFilDeletar)){
    echo("Filme deletado com sucesso.");
}else{
    echo("Filme não deletado.");
}
include("../views/footer.php");
?>