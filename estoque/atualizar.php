<?php

include "config/conexao.php" ;

$id=$_POST["id"] ;
$nome=$_POST["nome"] ;
$categoria=$_POST["categoria"] ;
$preco=$_POST["preco"] ;
$quant=$_POST["quantidade"] ;

$sql= " UPDATE tb_produtos SET nome='$nome', categoria='$categoria', preco='$preco', quant='$quant' WHERE id = $id";



if ($conexao->query($sql)){
    echo "Produto atualizado com sucesso! ";
} else {
    echo "✖️ Erro ao  o proatualizarduto!";
}
echo "<br> <a href='listar.php'> Voltar para a lista </a>"; 
