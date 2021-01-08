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
        $d = isset($_POST["ds"])?$_POST["ds"]: 0 ;        
        
        switch($d){            
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            
            case 7:
            case 8:
                echo "Descanse, final de semana! :)";
                break;
            
            default:
                echo "dia da semana invalido!";        
            
        }
            echo "<br/>O resultado da operação utilizada foi <span class='foco'>$d</span>";
        
   
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
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </p>
    </div>
    
</body>
</html>