<meta charset="UTF-8">
<form action="" method="GET">
	<label>Dia da semana</label>
	<input type="number" name="dia" min="1" max="7" required />
	<button type="submit">Enviar</button>
</form>
<?php
	switch($_GET["dia"]){
		case 1:
			print "Domingo";
		break;
		case 2:
			print "Segunda-feira";
		break;
		case 3:
			print "Terça-feira";
		break;
		case 4:
			print "Quarta-feira";
		break;
		case 5:
			print "Quinta-feira";
		break;
		case 6:
			print "Sexta-feira";
		break;
		case 7:
			print "Sábado";
		break;

		default:
			print "Não é um dia da semana";
	}
?>