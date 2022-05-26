<?php
require 'config.php';
include 'src/artigos.php';
$artigos = new Artigo($mysql);

$id_artigo = $_GET['id'];

$artigoArr = $artigos->getById($id_artigo);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>
            <?= $artigoArr['titulo']; ?>
        </h1>
        <p>
            <?= $artigoArr['conteudo']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
</body>

<script src="index.js">

</script>

</html>