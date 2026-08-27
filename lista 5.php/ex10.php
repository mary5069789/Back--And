<?php

$peso=56;
$altura_metros=1.6;
$imc= $peso / ($altura_metros*$altura_metros);


if($imc>=19 && $imc<=24){
    echo"Seu peso é ideal";
}
elseif($imc>=25  && $imc<=29){
    echo"Sobrepeso ";
}

elseif($imc>=30  && $imc<=34){
    echo"Obesidade nivel 1 ";
}
elseif($imc>=35  && $imc<= 39){
    echo"Obesidade nivel 2 ";
}
elseif($imc>=40){
    echo"Obesidade nivel 3 ";
}
else {
    echo"Erro" ;
}

