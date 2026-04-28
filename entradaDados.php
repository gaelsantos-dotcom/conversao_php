
<?php




require_once 'bibliotecaFuncoes.php';

use function conversao\dolarParaReal;
use function conversao\euroParaReal;
use function conversao\pesoParaReal;
use function conversao\libraParaReal;
use function conversao\ieneParaReal;

$cotacaoDolar = 5.00;
$cotacaoEuro = 5.25;
$cotacaoPeso = 0.0035; 
$cotacaoLibra = 6.60;
$cotacaoIene = 0.035;
$real = 100;

$resultadoDolar = dolarParaReal($real, $cotacaoDolar);
$resultadoEuro = euroParaReal($real, $cotacaoEuro);
$resultadoPeso = pesoParaReal($real, $cotacaoPeso);
$resultadoLibra = libraParaReal($real, $cotacaoLibra);
$resultadoIene = ieneParaReal($real, $cotacaoIene);



echo "Dólar para Real: R$ " . number_format($resultadoDolar, 2);

echo "Euro para Real: R$ " . number_format($resultadoEuro, 2);

echo "Peso para Real: R$ " . number_format($resultadoPeso, 4);

echo "Libra para Real: R$ " . number_format($resultadoLibra, 2);

echo "Iene para Real: R$ " . number_format($resultadoIene, 4);

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









?>









