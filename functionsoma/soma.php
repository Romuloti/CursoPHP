<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Descrição do site" />
    <meta name="keywords" content="Palavras importantes do site" />
    <meta name="author" content="Romulo de Oliveira Azevedo" />
    <link rel="stylesheet" type="text/css" href="" />
    <title>Funcao Soma</title>

</head>
<body>
<div>
    <?php
  
function soma(){
    $p = func_get_args();   // Coleta todos os valores e coloca dentro de um vetor 
    $t = func_num_args();   // retornar o número de argumentos que foram passados no func_get_args
    $s = 0;                 // inicia com 0
    for($i = 0; $i<$t; $i++){
        $s = $s + $p[$i];
    }
    return $s;
}
$r = soma(3,4,5,8,9,20);
echo "A soma dos valores é $r";
/*
function soma(){
    $p   = func_get_args();
    $tot = func_num_args();
    $s   = 0;
    for($i=0; $i<$tot; $i++){
        $s = $s + $p[$i];
    }
    return $s;        
}
$res = soma(3,4,8,1,2);

// Exercicios
*/
?>
</div>
</body>
</html>