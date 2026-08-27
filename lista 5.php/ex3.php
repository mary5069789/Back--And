<?php 

$not1= 8 ;
$not2= 6 ;
$not3= 7 ;

$media= ($not1= 8 + $not2= 6 + 
$not3= 7 )/3;

if($media>=7){
    echo"Aprovado direto";
}
elseif ($media>=5 &&$media<7){
 echo"Tem direito a recuperação";
}

else {
 echo"Reprovado ☹️";
}
