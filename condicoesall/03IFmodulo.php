<meta charset="UTF-8">
<form action="03.php" method="GET">
	<label>A</label>
	<input type="number" name="a">
	<button type="submit">Enviar</button>
</form>
<?php
	$a = $_GET["a"];
	
	if(($a%2)==0){
		print "número é par";
	}else{
		print "número ímpar";
	}
?>