<?php 
$txt1 = "o João foi à oficina e a
reparação do carro é de 78,00 € sem IVA.
Qual o valor de reparação com IVA?";
$preço = 78;
$iva =0.23 ;
$valor = ($preço * $iva ); 
$soma = ($valor + $preço);

echo $txt1. "<br> O valor com  iva é  " .$soma ;

?>

