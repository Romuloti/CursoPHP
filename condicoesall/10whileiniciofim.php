<form action="" method="GET">
	Inicio <input type="number" name="inicio">
	Fim <input type="number" name="fim">
	<button type="submit">Enviar</button>
	<button type="submit">Processar</button>
</form>
<?php
	$inicio = $_REQUEST["inicio"];
	$fim    = $_REQUEST["fim"];
	
	while($inicio <= $fim){
		print $inicio." ";
		$inicio++;
	}
?>




