<?php
        
        $arquivo = ("C:\\wamp64\\www\\trabalho-php\\versao.txt"); 
        $ponteiro=fopen($arquivo, "w");
        $texto = "";
        $conteudo = $_COOKIE["idioma"]; 

        if (ISSET($_COOKIE["idioma"]))
        {
            if ($conteudo == "portugues") {
                $texto = "<h2 style='font-size: 24px; font-weight: bold;'>EMPRESA</h2><br>
                        <h3 style='font-size: 16px; font-weight: normal;'>A XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o
                        mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil.</h3>";
            } else if ($conteudo == "ingles") {
                $texto = "<h2 style='font-size: 24px; font-weight: bold;'>OUR PLANT</h2><br>
                        <h3 style='font-size: 16px; font-weight: normal;'>The XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded in 1970, and became
                        the most important and traditional supplier of BAGGING MACHINES in Brazil.</h3>";
            } else if ($conteudo == "espanhol") {
                $texto = "<h2 style='font-size: 24px; font-weight: bold;'>EMPRESA</h2><br>
                        <h3 style='font-size: 16px; font-weight: normal;'>La XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y se ha convertido
                        en la más importante y tradicional fábrica de MÁQUINAS ENSACADORAS en Brasil.</h3>";
            }



            fwrite($ponteiro, $texto);

        }

        fclose($ponteiro);
?>