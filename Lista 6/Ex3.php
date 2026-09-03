<?php

$opcao=2;
echo"Bem - vindo a ALARES INTERNET <br>";
echo"1-Suporte técnico <br>";
echo"2- Segundos via da fatura<br>";
echo"3-Falar com atendentes<br>";
echo"4-Sair <br>";

switch ($opcao){
    case 1:
        echo"Você escolheu : suporte técnico";
        break;
        case 2:
        echo"Você escolheu : Segundos via da fatura";
        break;
        case 3:
        echo"Você será encaminhado para um atendente";
        break;
        case 4:
        echo"Obrigado por utilizar a ALARES ";
        break;
        default :
        echo"Opção inválida";
}