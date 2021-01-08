<meta charset="UTF-8">
<form action="" method="GET">
	<label>A</label>
	<input type="number" name="a">
	<label>B</label>
	<input type="number" name="b">
	<label>C</label>
	<input type="number" name="c">
	<button type="submit">Enviar</button>
</form>
<?php
	

	$a = $_GET["a"];
	$b = $_GET["b"];
	$c = $_GET["c"];
	
	if(($a > $b)AND($a > $c)){
		print "Então ".$a." é o maior";
	}elseif(($b > $a)AND($b > $c)){
		print "Então ".$b." é o maior";
	}elseif(($c > $a)AND($c > $b)){
		print "Então ".$c." é o maior<br/>";
	}
	
	//o php tem a função para saber o maior entre várias variáveis
	print max($a,$b,$c)." é o maior<br/>";
	//para saber o menor
	print min($a,$b,$c)." é o menor";
	
?>









