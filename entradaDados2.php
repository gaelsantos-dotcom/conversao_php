<?php


require_once "bibliotecaArea.php";

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;

echo "Cálculo das áreas \n";

$resultado = 0;
$lado = 5;
$resultado = areaQuadrado($resultado, $lado);
echo "Área  Quadrado: " . $resultado . "\n";
$base = 10;
$altura = 5;
$resultado = areaRetangulo($resultado, $base, $altura);
echo "Área  Retângulo: " . $resultado . "\n";
$base = 10;
$altura = 5;
$resultado = areaTriangulo($resultado, $base, $altura);
echo "Área  Triângulo: " . $resultado . "\n";
$raio = 5;
$resultado = 0;
$resultado = areaCirculo($resultado, $raio);
echo "Área  Círculo: " . $resultado . "\n";
$baseMaior = 10;
$baseMenor = 5;
$altura = 5;
$resultado = areaTrapezio($baseMaior, $baseMenor, $altura, $resultado);
echo "Área  Trapézio: " . $resultado . "\n";