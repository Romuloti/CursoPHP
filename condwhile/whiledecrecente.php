<meta charset="utf-8" />
<form action="" method="">
<label></label>
<input type="number" name="numero" /><br/><br/><br/>
<input type="submit" value="contar" />
</form>

<?php

$valor = $_GET["numero"];
 
 //$valor = 1;

 while($valor >= 1){

    echo $valor."<br/>";
    $valor--;   // $c = $c - 1;  ||  $c -= 1;
 }
?>