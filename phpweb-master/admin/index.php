<?php

require '../config.php';
include '../src/artigos.php';
$artigos = new Artigo($mysql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Página Administrativa</h1>
        <?php foreach ($artigos->exibirTodosArtigos() as $artigo) : ?>
        <div>
            <div id="artigo-admin">
                <p>
                    <?php echo $artigo['titulo']; ?>
                </p>
                <nav>
                    <a class="botao" href="editar-artigo.php?id=<?=$artigo["id"]?>">Editar</a>
                    <a class="botao" href="excluir-artigo.php?id=<?=$artigo["id"]?>">Excluir</a>
                </nav>
            </div>
        </div>
        <?php endforeach ?>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Artigo</a>
    </div>
</body>

</html>