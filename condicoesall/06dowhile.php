<meta charset="utf-8">

<fieldset><legend>formulário</legend>

<form action="" method="GET">

<label>Campo :</label>
<input type="number" name="numero" />
<button type="submit">Enviar</button>

</form><br/>
</fieldset><br/><br/>
<?php

	$valor = isset($_GET["numero"])?$_GET["numero"]:0;

	$i = $valor;
	// $i = 3;
	
	do{
		print $i." ";
		$i++;		
	}while($i < 100);
	     
	



?>