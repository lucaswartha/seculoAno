<?php
    function seculoAno($ano){
        if(strlen($ano) == 4){
            $var1 = substr($ano, 0, 2);
            $var2 = substr($ano, -2);
            if($var2 != 00){
                $var1++;
                echo "O século é $var1";
            } else {
                echo "O século é $var1";
            }
        }
        else if(strlen($ano) == 3){
            $var1 = substr($ano, 0, 1);
            $var2 = substr($ano, -2);
            if($var2 != 00){
                $var1++;
                echo "O século é $var1";
            } else {
                echo "O século é $var1";
            }
        }
        else if(strlen($ano) <= 2){
            echo "O século é 1";
        } else {
            echo "Alguma coisa aconteceu de errado!";
        }

        
    }

    echo seculoAno(2022);

?>