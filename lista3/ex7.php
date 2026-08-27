<?php

$valor=200 ;
$valorminimoentrega=90;
$idadecliente=16;
$idademinimabebidaalolica=18;
$estoque=30 ;
$quantidadepedida=5;
$statuspedido="pago" ;


echo"Bem - vindo a Hamburgueria digital <br> ";

if ($valor<= $valorminimoentrega) {
    echo"Liberar entrega gratis <br>" ;
}

else{
    echo" Pagar a entrega mais o valor do pedido <br>";
}

if ($idadecliente>=18){
     echo"Liberado a compra de  bebida alcoólica <br>";
}
 else {
    echo" Compra de bebida alcoólica negada <br>";
 }   

 if ($quantidadepedida<=$estoque) {
    echo"Pedido aceito <br>";
 }

 else{
    echo"Pedido negado <br>";
 }

 if ($statuspedido=="pago") {
    echo" Em produção <br>";

 }

 else{
    echo" Sem produção <br>";
 }



