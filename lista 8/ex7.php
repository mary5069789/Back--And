<?

$senhacorreta="1234";
$senha="322";
$tentativas= 0;

while ($tentativas <= 3 ){
    $tentativas++;

    if ($senha == $senhacorreta ){
        echo " Senha correta ! Acesso permitido";
        break;

    } else {
        echo" Senha incorreta ! <br>";
    }
}
?>