<meta charset="UTF-8">
<form action="" method="GET">
	<label>A</label>
	<input type="number" name="a">
	<select name="oper">
		<option value="som"> + </option>
		<option value="sub"> - </option>
		<option value="mul"> * </option>
		<option value="div"> / </option>
	</select>
	<label>B</label>
	<input type="number" name="b">
	<button type="submit">Enviar</button>
</form>
<?php
	$a = isset($_GET["a"])?$_GET["a"]:0;
	$b = isset($_GET["b"])?$_GET["b"]:0;
	$oper = isset($_GET["oper"])?$_GET["oper"]:[""];
	/*                                   
	if($oper == "som"){                                 if=>ok;
		$total = $a + $b;
		print $total;
	}elseif($oper == "sub"){
		$total = $a - $b;
		print $total;
	}elseif($oper == "mul"){
		$total = $a * $b;
		print $total;
	}else{		
		$total = $a / $b;
		print $total;
	}
	echo "O valor dos resultados é: $total";
	
	switch($oper){                                        switch=>ok;
		case "som":			
		$total = ($a + $b);
		echo "echo + dentro da condição".$total."<br/>";
		break;

		case "sub":
		$total = ($a - $b);
		echo "echo - dentro da condição".$total."<br/>";
		break;
		
		case "mul":
		$total = ($a * $b);
		echo "echo * dentro da condição".$total."<br/>";
		break;

		case "div":
		$total = ($a / $b);
		echo "echo / dentro da condição".$total."<br/>";
		break;
	}
echo "O valor dos resultados é: $total";
*/

$numeroUm = $_GET["a"];                                     // switch com function => ok;
$numeroDois = $_GET["b"];
$operacao = $_GET["oper"];
$resultado;
function soma($a, $b){
return $soma = $a + $b;
}

function subtrair($a, $b){
return $subtrair = $a - $b;
}

function multiplicar($a, $b){
return $multiplicar = $a * $b;
}

function dividir($a, $b){
if(($a == 0) || ($b == 0)){
return $resultado = "Não é possivel";
}else{
return $dividir = $a / $b;
}

}
switch($operacao){
case "som":
$resultado = soma($numeroUm, $numeroDois);
print "Está linha dentro da condição".$resultado."<br/>";
break;

case "sub":
$resultado = subtrair($numeroUm, $numeroDois);
print "Está linha dentro da condição".$resultado."<br/>";
break;

case "mul":
$resultado = multiplicar($numeroUm, $numeroDois);
print "Está linha dentro da condição".$resultado."<br/>";
break;

case "div":
$resultado = dividir($numeroUm, $numeroDois);
print "Está linha dentro da condição".$resultado."<br/>";
break;
}

echo "Este é o resultado da operação $resultado";

?>