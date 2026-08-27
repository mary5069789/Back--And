<?php

$email="maribranco@gmail.com";
$senha="5040Ma";

echo"Bem vindo ao Facebook <br>";

if($email=="mari.branco@gmail.com" && $senha=="5040Ma"){
    echo"Acesso Liberado <br> ";
     header("location : https: //www.facebook.com");

}

else {
    echo"Email ou senha invalido";

}
