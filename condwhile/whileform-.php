<meta charset="utf-8" />
<fieldset><legend>Contar formulário em PHP</legend>
<form action="" method="">
    <label>Valor </label><br/>
    <input type="number" name="numero" max="100" min="1" value="0" /><br/><br/><br/>
    <input type="submit" value="contar" />
</form>
</fieldset>
<?php

$valor = $_GET["numero"];
 
 //$valor = 1;

 while($valor >= 1){

    echo $valor."<br/>";
    $valor--;   // $c = $c - 1;  ||  $c -= 1;
 }
?>


<h1>Com script PHP</h1>

<fieldset><legend>Contar formulário em PHP</legend>
<form action='' method='get'>

<?php




$valor = $_GET["numero"];
while($valor <= 5){

    echo "<label>Valor </label><br/>";
    echo "<input type='number' name='numero' max='100' min='1' value='0' /><br/><br/><br/>";
    $valor++;
   

}


?>
</form>

</fieldset>
<input type='submit' value='contar' />