<?php

function status($entrada, $resposta = array('Fechado', 'Aberto (Em Andamento)', 'Suspenso', 'Encerrado', 'Cancelado'))
{
    if ($entrada == 0) {
        return $resposta[0];
    } elseif ($entrada == 1) {
        return $resposta[1];
    } elseif ($entrada == 2) {
        return $resposta[2];
    } elseif ($entrada == 3) {
        return $resposta[3];
    } elseif ($entrada == 4) {
        return $resposta[4];
    }
}

function unidade($entrada, $resposta = array('Unidade(s)','Unidade(s) (Meta Ilimitada)','Percentil','KM Quadrado'))
{
    if($entrada == 1){
        return $resposta[0];
    } elseif ($entrada == 2) {
        return $resposta[1];
    } elseif ($entrada == 3) {
        return $resposta[2];
    } elseif ($entrada == 4) {
        return $resposta[3];
    } 
}

function sim_nao($entrada, $resposta = array('Assinado', 'Não assinado'))
{
    return $entrada == 1 ? $resposta[0] : $resposta[1];
}

function areapercentual($especifico, $area)
{
    return $area_percentual = round(($especifico / $area) * 100, 2);
}

function consulta($entrada){
    
}

