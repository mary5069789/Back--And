<?php

$opcao= 1;
echo" Bem - vindo ao Jumanji <br>";
echo" Aqui será possivel visualizar o menu do jogo  <br>";
echo"1- Jogar <br>";
echo"2- Personagens <br>";
echo"3-Ver ranking <br>";
echo"4- Configurações <br><br>";
echo" 5- Sair <br>";

switch ($opcao){
    case 1:
        echo"Jumanji se iniciará, boa sorte jogador🎮";
        break;
        case 2:
        echo"Matadora de Homens";
        echo"Escudeiro";
        echo"Bravis Stone";
        break;

        case 3:
        echo"Mary67 está em primeiro lugar";
        echo"Junior45 está em segundo lugar";
        echo"Suny32 está em terceiro lugar"; 
        break;

        case 4:   
        echo" Som 100%";
        echo"Perfil";
        echo"Trocar de personagem ";
        break;

        case 5:   
        echo" Até logo";
       
        break;
        
        default :
        echo"Opção inválida";
}
      
