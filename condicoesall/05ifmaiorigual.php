<meta charset="UTF-8">
<form action="" method="GET">
	<label>A</label>
	<input type="number" name="a"><br/><br/>
	<label>B</label>
	<input type="number" name="b">
	<button type="submit">Enviar</button>
</form>
<?php
	$a = $_GET["a"];
	$b = $_GET["b"];
	
	if($a > $b){
		print $a." é maior que ".$b."<br/>";
	}elseif($b > $a){
		print $b." é maior que ".$a."<br/>";
	}else{
		print $a." é igual a ".$b."<br/>";
	}	

	print max($a, $b)." Esté é o maior<br/>";

	echo min($a, $b)." Esté é o menor valor<br/>";


?>





