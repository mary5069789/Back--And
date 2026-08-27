<?php

$nome = "Jonh Wick" ;
$acesso = 3 ;

if($acesso == 1 ) {
    echo"Bem vindo $nome. Você tem acesso básico ao sistema ";
}

elseif($acesso== 2 ){
    echo"Bem vindo $nome. Você tem acesso intermediário ao sistema";
}

else {
echo"Erro. Número de acesso inválido ";
}
