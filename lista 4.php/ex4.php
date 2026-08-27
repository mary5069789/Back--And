 <?php

$email="maribranco@gmail.com";
$senha="5040Ma";
$status="desativado";

echo"Bem vindo ao Facebook <br>";

if($email=="maribranco@gmail.com" && $senha=="5040Ma" && $status=="ativo"){
    echo"Acesso Liberado <br> ";
     header("location : https: //www.facebook.com");

}

else {
    echo"Email ou senha invalido";

}
