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
           a.botao {
               
           }
       </style>
    </head>
<body>
   <?php   
        $n = isset($_POST["numero"])?$_POST["numero"]: 0 ;
        $x = isset($_POST["oper"])?$_POST["oper"]: 1 ;
        
        switch($x){
            case 1:
                $resultado = $n * 2;
                break;
            
            case 2:
                $resultado = $n ^ 3;
                break;
            
            case 3:
                //$resultado = $n ^ (1/2); ou 0.5;
                $resultado = sqrt($n);
                break;
            
            default:
                echo "Não foi repassado nada!";
         
            
        }
            echo "O resultado da operação utilizada foi <span class='foco'>$resultado</span>";
        
   
   /*
      switch($x){
          case 1:
              echo "A";
              break;
          
          case 2:
              echo "B";
              break;
          
          case 3:
              echo "C";
              break;
          
          default:
              echo "Não foi escolhido nenhum caso!";         
          
      } 
     */
    
   ?>    

    <div>
    <p>
    <a href="index.php" class="botao">Voltar</a>
    </p>
    </div>
    
</body>
</html>