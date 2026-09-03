<?php

$opcao=2;
$saldo=500;

switch ($opcao){
    case 1:
        echo"Seu saldo é : R$ $saldo";
        break;
        case 2:
            echo"Você escolheu : Sacar dinheiro";
            break;
            case 3: 
                echo"Você escolheu : Depositar dinheiro.";
                break;
                case 4 : 
                    echo"Você ecolheu : Consultar extrato" ;
                    break;
                    default :
                    echo" Opção inváçlida";
}
