<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
    <link rel="stylesheet" href="style.css">
    <?php 

        //setcookie('idioma', '', 1);


        if(ISSET($_COOKIE["idioma"])){
            include("compara.inc");

        }
        else{

            $arquivo = ("C:\\wamp64\\www\\trabalho-php\\versao.txt"); 
            $ponteiro=fopen($arquivo, "r");

            
            $texto = file_get_contents($arquivo);

            

        };
         ?>
</head>
<body>
    

    <?php
        if(!ISSET($_COOKIE["idioma"])){
            echo '
                    <header>
                        <h1><center>Bem vindo ao Site Web Design em Foco</center></h2>
                    </header>
            ';
        }       
    ?>


    <div class="container">
        <div class="conteudo">
            
                <?php 
                if(ISSET($_COOKIE["idioma"])){
                    echo $texto;

                    echo '<p><br><a href="./destroyCookie.php">Escolher outro idioma</a></p>';
                }else{
                    echo "<h2><center>Escolha o idioma para entrar</center></h2>";

                }
                
                ?>
            

        </div>

        <?php
        if(!ISSET($_COOKIE["idioma"])){

            echo '       <div class="linguagens">

            
                                <div class="bandeiras">
                                    <a href="./idioma.php?idioma=ingles"> 
                                        <img src="./assets/18166.png"  alt="">
                                    </a>
                                </div>
                                <div class="bandeiras">
                                    <a href="./idioma.php?idioma=portugues"> 
                                        <img src="./assets/brasil.png"  alt="">
                                    </a>
                                </div>
                                <div class="bandeiras">
                                    <a href="./idioma.php?idioma=espanhol">
                                        <img src="./assets/espanha.png"  alt="">
                                    </a>
                                </div>
                        </div>';
        }
        ?>

    </div>


</body>
</html>