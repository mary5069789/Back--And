<?php

include "config/conexao.php";
$nome=$_POST ["nome"];
$categoria=$_POST ["categoria"];
$preco=$_POST ["preco"];
$quant=$_POST ["quantidade"];

$nomeimagem=null;
if(isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] === UPLOAD_ERR_OK){
   
$extensoes_permitidas = ["jpg", "jpeg", "png", "webp"];
$extensao = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));
if(!in_array($extensao, $extensoes_permitidas)){
    die("Formato de imagem não permitido. Use JPG, JPEG, PNG ou WEBP.");
    }

    if($_FILES["imagem"]["size"] > 2 * 1024 * 1024){
        die("O tamanho da imagem não pode exceder 2MB.");
    }
    $nomeimagem = uniqid("produto") . "." . $extensao;
    move_uploaded_file($_FILES["imagem"]["tmp_name"], "uploads/" . $nomeimagem);
}

  $sql = "INSERT INTO tb_produtos(nome,quant,categoria,preco,imagem) VALUES ('$nome','$quant','$categoria','$preco','$nomeimagem')";

  if ($conexao->query($sql)){;
  echo"Produto cadastrado com sucesso !";
  }else{ 
    echo"Erro ao cadastrar o produto!";
  }

  echo"<br><a href='adastrar.html'> Voltar</a>";

?>