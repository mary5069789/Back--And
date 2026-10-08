<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $palpite = $_POST["palpite"];
    $numeroSorteado = rand(1, 10);

    if ($palpite == $numeroSorteado) {
        $_SESSION['mensagem'] = "Parabéns! Você acertou o número sorteado: $numeroSorteado.";
        $_SESSION['status'] = 'ganhou';
    } else {
        $_SESSION['mensagem'] = "Que pena! O número sorteado foi: $numeroSorteado. Tente novamente!";
        $_SESSION['status'] = 'jogando';
    }
}
echo $_SESSION['mensagem'];
?>