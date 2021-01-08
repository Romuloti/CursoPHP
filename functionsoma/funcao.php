<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Descrição do site" />
    <meta name="keywords" content="Palavras importantes do site" />
    <meta name="author" content="Romulo de Oliveira Azevedo" />
    <link rel="stylesheet" type="text/css" href="" />
    <title>Teste</title>

</head>
<body>
<div>
    <?php
/*
    function soma ($a, $b){
        $s = $a + $b;
        echo "A soma vale $s";
    }
    soma(3, 4);
    echo "<br/>";
    soma(10, 15);
*/
function soma($a, $b){
    $s = $a + $b;
    return $s;
    //return $a+$b;
}
//$res <- soma(3, 4);
$x = 4;
$y = 6;
$r = soma($x, $y);

echo "A soma entre A e B é ". $r;
?>
</div>
</body>
</html>