<?php

$idade= 16 ;
$deficiência="Paralisia cerebral";
$gestante=" Sim" ;

if($idade<=60 && $deficiência== "Paralisia cerebral" && $gestante=="sim"){
    echo"Atendimento prioritário ";
}

else {
    echo"Atendimento normal ";
}