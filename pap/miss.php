<?php
include("config.php");

$Nome = $_POST["nome"];
$Idade = $_POST["idade"];
$Sexo = $_POST["sexo"];
$Lugar = $_POST['lugar'];
$Pais = $_POST['nome_pais'];
$User = $_POST['nome_user'];
$Imagem = $_FILES['imagem']['name'];
$ImagemTemp = $_FILES['imagem']['tmp_name'];

// Diretório de destino para a imagem
$diretorioDestino = "arquivos/";

// Caminho completo para a imagem no diretório de destino
$caminhoImagem = $diretorioDestino . $Imagem;

// Move a imagem para o diretório de destino
if (move_uploaded_file($ImagemTemp, $caminhoImagem)) {
    // Inserir registro na tabela kids com o caminho da imagem
    $inserir = mysqli_query($conn,"INSERT INTO desaparecidos (nome, idade, sexo, lugar, nome_pais, nome_user, imagem) VALUES ('$Nome','$Idade','$Sexo','$Lugar','$Pais','$User','$caminhoImagem')");
    
    // Verifica se o registro foi inserido com sucesso
    if($inserir){
        // Exibe uma mensagem de sucesso
        echo "Informações e imagem enviadas com sucesso!";
    } else {
        // Exibe uma mensagem de erro
        echo "Erro ao enviar informações e imagem!";
    }
} else {
    // Exibe uma mensagem de erro caso a imagem não possa ser movida para o diretório de destino
    echo "Erro ao mover a imagem para o diretório de destino!";
}

header("location:cad.php");
?>
