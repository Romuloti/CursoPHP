<Doctype html> //Só quando eu sei o limite inicial e o final de uma expressão mais fácil de ser utilizado

<?php

$i = 1;

for($i=$i; $i <= 10; $i++){
    echo $i;
}
echo "<hr>";


$i = 1;
while($i <= 10){
    echo $i;
    $i++;
}


echo "<br/>";

$i = 1;
do{
   echo $i;
   $i++; 
}while($i <= 10);
echo $i;





?>