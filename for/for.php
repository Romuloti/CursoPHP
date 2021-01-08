<Doctype html> 
    <p>* If e Switch</p>
    
<p><span><b><br/>For</b> em PHP&nbsp;&nbsp;</span>&raquo;<br/>Só quando eu sei o limite inicial e o final de uma expressão mais fácil de ser utilizado.</p>

<?php

$i = 1;

for($i=$i; $i <= 10; $i+=3){
    echo "Primeiro ".$i.", ";
}
echo "<br/>Espaço<br/>";

$i = 1;

for($i=$i; $i <= 10; $i++){
    echo "Primeiro ".$i.", ";
}

echo "<hr>";

echo "<br/><p><span><b>while</b> em PHP&nbsp;&nbsp;</span>&raquo;<br/> é repetir um determinado trecho ENQUANTO uma determinada condição for verdadeira..</p>";

$i = 1;
while($i <= 10){
    echo "<br/>Segundo ".$i;
    $i++;
}


echo "<br/>";
echo "<hr>";

echo "<br/><p><span><b>Do While</b> em PHP&nbsp;&nbsp;</span>&raquo;<br/> É usada quando não sabemos quantas vezes um determinado bloco de instruções precisa ser repetido.</p>";

$i = 1;
do{
    echo "<br/>";
   echo"while echo Terceiro ".$i;
   $i++; 
}while($i <= 10);


echo "<br/><hr><br/>";

$i = array(
    "1" => 1,
    "2" => 2,
    "3" => 3,
    "4" => 4,
    "5" => 5,
    "6" => 6,
    "7" => 7,
    "8" => 8,
    "9" => 9,
    "10"=> 10

    
);

echo "<p><b>Foreach</b></p>Somenete com arrays atribuir a chave do elemento corrente a variável $key a cada iteração<br/> ";
foreach($i as $key => $valor){
    echo "<br/>Laço do foreach".$valor.", ";

};
echo "<br/>";

echo "<hr><br/>";

$i = array(
    "1" => 1,
    "2" => 2,
    "3" => 3,
    "4" => 4,
    "5" => 5,
    "6" => 6,
    "7" => 7,
    "8" => 8,
    "9" => 9,
    "10"=> 10

    
);
echo "Está forma itera sobre arrays informados no array_expressão ";
foreach($i as $valor){
    echo "<br/>Laço do foreach".$valor.", ";

};

?>