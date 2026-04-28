<?php


namespace conversao;


function dolarParaReal($valor, $cotacao) {
    return $valor * $cotacao;
}

function euroParaReal($valor, $cotacao) {
    return $valor * $cotacao;
}

function pesoParaReal($valor, $cotacao) {
    return $valor * $cotacao;
}


function libraParaReal($valor, $cotacao) {
    return $valor * $cotacao;
}


function ieneParaReal($valor, $cotacao) {
    return $valor * $cotacao;
}




namespace geometria {

    function areaQuadrado($resultado, $lado)
    {
        return $resultado = $lado * $lado;
    }

    function areaRetangulo($resultado, $base, $altura)
    {
        return $resultado = $base * $altura;
    }

    function areaTriangulo($resultado, $base, $altura)
    {
        return $resultado = ($base * $altura) / 2;
    }

    function areaCirculo($resultado, $raio)
    {
        return $resultado = 3.14 * ($raio * $raio);
    }
    function areaTrapezio($baseMaior, $baseMenor, $altura, $resultado)
    {
        return $resultado = (($baseMaior + $baseMenor) * $altura) / 2;
    }
}
    

