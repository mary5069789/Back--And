<?php

$nome="Mariana" ;
$senha="mary5678";
$confirmar_senha="mary5678";
$data_nas= "22/11/2009";

if($nome!= 0){
    echo"Nome existente <br>" , $nome ;
    
}

 else {
    echo"Usuário inexistente <br>" ;
 }

 if($senha==$confirmar_senha) {
  echo" Senha confirmada  <br>" , $senha ;
 }

 else {
    echo"Senha incorreta <br>" ;
 }

if($data_nas == $data_nas) {
    echo" $data_nas <br>" ;

}

else {
    echo" Erroo" ;
}