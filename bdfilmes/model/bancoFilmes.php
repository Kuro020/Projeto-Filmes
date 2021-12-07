<?php
function inserirFilme($conexao, $nomeFil,$duracaoFil,$precoFil,$generoFil,$classificacaoFil,$avaliacaoFil,$imgFil,$estreiaFil,$direcaoFil,$roteiroFil)
{
    $query = "insert into tbfilmes(nomeFil,duracaoFil,precoFil,generoFil,classificacaoFil,avaliacaoFil,imgFil,estreiaFil,direcaoFil,roteiroFil)values('{$nomeFil}','{$duracaoFil}','{$precoFil}','{$generoFil}','{$classificacaoFil}','{$avaliacaoFil}','{$imgFil}','{$estreiaFil}','{$direcaoFil}','{$roteiroFil}')";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}
function listaTudoFilmes($conexao)
{
    $query = "Select * From tbfilmes";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}
function listaTudoFilmesCod($conexao, $codFilme)
{
    $query = "Select * from tbfilmes where codFil={$codFilme}";
    $resultados = mysqli_query($conexao, $query);
    $resul = mysqli_fetch_array($resultados);
    return $resul;
}
function alterarFilmes($conexao, $codFil, $nomeFil, $imgFil, $duracaoFil, $precoFil, $generoFil, $classificacaoFil, $avaliacaoFil, $estreiaFil, $direcaoFil, $roteiroFil)
{
    $query = "update tbfilmes set nomeFil='{$nomeFil}', imgFil='{$imgFil}', duracaoFil='{$duracaoFil}', precoFil='{$precoFil}', generoFil='{$generoFil}', classificacaoFil='{$classificacaoFil}', avaliacaoFil='{$avaliacaoFil}', estreiaFil='{$estreiaFil}', direcaoFil='{$direcaoFil}', roteiroFil='{$roteiroFil}' where codFil = '{$codFil}'";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}
function deletarFilmes($conexao, $codFil)
{
    $query = "delete from tbfilmes where codFil=$codFil";
    $resultados = mysqli_query($conexao, $query);
    return $resultados;
}