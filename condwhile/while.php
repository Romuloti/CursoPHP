<meta charset="utf-8" />
<form action="" method="">
<label>Teste while </label><br/>
<input type="number" name="numero" /><br/><br/>
<input type="submit" value="contar" />
</form>

<?php

$valor = $_GET["numero"];
 
 //$valor = 1;

 while($valor <= 10){

    echo $valor."<br/>";
    $valor++;   // $c = $c + 1;  ||  $c += 1;
 }
?>
