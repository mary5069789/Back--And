<?php


$musicas= ["De janeiro a janeiro", "Jurajuradinho","A flor e o beija flor","Dona de mim","Amor de verdade","Batom de cereja"] ;

$soma=0;

foreach($musicas as $playlist){
    echo"$playlist <br>";
     $soma ++ ;
}

 echo " As musicas são : $soma";