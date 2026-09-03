<?php

function verificaridade($idade)
{
  if ($idade>=18){
     return "Maior de idade. Pode tirar carta<br><br>";
  }  else {
    return " Menor de idade.  Só de uber  <br><br>"; 
  }
}
echo verificaridade(17);
echo verificaridade(44);
echo verificaridade(15);
echo verificaridade(18);

