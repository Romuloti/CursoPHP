<meta charset="UTF-8">
<?php
	$frutas = array(
		"Banana",
		"Melancia",
		"Maçã",
		"Laranja",
		"Pêra",
		"Uva"
	);
	
	foreach($frutas as $fruta){
		print $fruta."<br>";
	}
	echo "<hr><br/>";
	///outro exemplo
	
	$alfabeto = range("A","Z"); 
	//pode usar p/ 
	
	

	foreach($alfabeto as $key => $letra){
		print $letra." ";
	}
echo "<br/><br/><hr><br/>";
	foreach($alfabeto as $letra){
		print $letra." ";
	}
	echo "<br/><br/><hr><br/><br/>";
///outro exemplo

	$frutas = array("Banana","Melancia","Maçã","Laranja","Pêra","Uva");

	foreach($frutas as $frut){
		echo "<br/>'".$frut."' ";
	}

	echo "<hr><br/><br/><br/>";


	$numeral = range(0,100); 
	//pode usar p/ numeros	

	foreach($numeral as $key => $cada){	
		print $cada." ";

	}

	echo "<hr>";

	$carro = ["Gol","Palio","Chevete","Fusca","Bora","Golf","Civic","Ferrari"];

	foreach($carro as $unico){
		print " '".$unico."' ";

	}


	echo "<hr>";


	$terra = array(

		"nome" => "Romulo",
		"sobrenome" => "Azevedo",
		"endeereco" => "EPTG, QD 01 Bloco B3",
		"telefone" => 33817528,
		"cpf" => 72499966149,
		"idade" => 37

	);

	foreach($terra as $proximo){	
		print "<br/>".$proximo;

	}




?>







