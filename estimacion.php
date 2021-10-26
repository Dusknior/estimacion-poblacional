<?php 

/*$Lugar = " ";
$PoblacionInicial = 0;
$PoblacionFinal = 0;
$TiempoPoblaciones = 0;
$TasaCrecimiento = 0;*/

/*Método Lineal (Aritmético)*/
function Metodo_Lineal($PoblacionInicial,$PoblacionFinal,$AnoIncognita,$AnoIncial,$AnoFinal){
	$No = $PoblacionInicial;
	$Nf = $PoblacionFinal;
	$To = $AnoIncial;
	$Tf = $AnoFinal;
	$t = abs($To - $Tf);
	$A = $AnoIncognita;
	$r = (($Nf/$No) - 1)/($t);
	$N = $No*(1 + ($r*abs($To-$A)));
	echo "La tasa de crecimiento en el período ".$To."-".$Tf." ha sido de ".($r*100)." por cada 100 personas, considerando de que la población tuvo un crecimiento lineal. Con base a la población del año ".$To." la población en el año ".$A." será: ".$N.".";
}

Metodo_Lineal(34.27,40.4,2019,1990,2000);

echo "<hr>";

/*Método Geométrico o Exponencial*/
function Metodo_Exponencial($PoblacionInicial,$PoblacionFinal,$AnoIncognita,$AnoIncial,$AnoFinal){
	$No = $PoblacionInicial;
	$Nf = $PoblacionFinal;
	$To = $AnoIncial;
	$Tf = $AnoFinal;
	$t = abs($To - $Tf);
	$A = $AnoIncognita;
	$r = pow(($Nf/$No),(1/$t))-1;
	$N = ($No)*pow((1 +$r), $t);
	echo "La tasa de crecimiento en el período ".$To."-".$Tf." ha sido de ".($r*100)." por cada 100 personas, suponemos que la población crece a una tasa constante. Con base a la población del año ".$To." la población en el año ".$A." será: ".$N.".";
}

Metodo_Exponencial(34.27,40.4,2019,1990,2000);
?>