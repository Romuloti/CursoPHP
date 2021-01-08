<meta charset="" />

<form action="" method="get">
<label>Campo : </label>
<input type="number" name="numero" />
<input type="submit" value="calcular" /><br/>

<button type="submit">Validar</button>

</form>


<?php
	$valor = $_GET["numero"];	


	for( $i = $valor; $i < 20; $i++ ){
		print $i." <br/>";
	}

	echo "<br/>Feito o 'For' para demonstrar a entrada de uma variável no input,<br/>Recebido o valor:  ".$valor." Até o número 20.";
?>	