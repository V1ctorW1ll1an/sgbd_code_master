<?php

require '../config.php';
include '../src/artigos.php';
$artigos = new Artigo($mysql);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id_artigo = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $artigos = new Artigo($mysql);
    $artigos->atualizarArtigo($id_artigo, $titulo, $conteudo);
    header('location: index.php');
    die();

}else{
    $id_artigo = $_GET['id'];
    $artigoArr = $artigos->getById($id_artigo);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Editar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Editar Artigo</h1>
        <form action="editar-artigo.php" method="post">
            <p>
                <label for="titulo">Digite o novo título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" value="<?=$artigoArr['titulo']?>" />
            </p>
            <p>
                <label for="conteudo">Digite o novo conteúdo do artigo</label>
                <textarea class="campo-form" type="text" name="conteudo" id="titulo"><?=$artigoArr['conteudo']?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?=$id_artigo?>" />
            </p>
            <p>
                <button class="botao" type="submit">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>