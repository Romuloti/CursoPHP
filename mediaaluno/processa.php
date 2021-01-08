<!Doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8" />
       <meta name="Description" content="Descrição dos exercícios" />
       <meta name="Keywords" content="Curso de PHP, Curso de formulários e" />
       <meta name="author" content="Romulo de Oliveira Azevedo" />
       <link rel="stylesheet" type="text/css" href="css/normalize" />
       <link rel="stylesheet" type="text/css" href="estilo.css" />
       <link rel="stylesheet" type="text/css" href="https://www.googlefontes.com.br" />
       <title>Projeto Digitado</title>
       <style>           
       </style>
    </head>
<body>
   <?php   
   
   $a = $_POST["nota1"];
   $b = $_POST["nota2"];  
   
   $resultado = ($a + $b) / 2;
   
   if($resultado < 5 ){
       $teste = "Reprovado";
   }elseif(($resultado == 5) || ($resultado < 6 )){
       $teste = "Recuperação";
   }else{
       $teste = "Aprovado";
   }
    
   
   echo "Sua média é $resultado<br/><br/>";
   echo "A média entre $a e $b é igual a $resultado<br/><br/>";
   
   echo "Situação atual do aluno é :$teste";
   
       
   ?>    

    <div>
    <p>
    <a href="index.php">Voltar</a>
    </p>
    </div>
    
</body>
</html>