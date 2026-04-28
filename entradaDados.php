
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
?>
