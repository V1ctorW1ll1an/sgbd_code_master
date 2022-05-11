<?php

include 'artigos.php';

$artigos = new Artigo();

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
        <h1>Meu Blog</h1>
        <?php foreach ($artigos->exibirTodosArtigos() as $artigo) : ?>
            <h2>
                <a href="<?php echo $artigo['link'] ?>">
                    <?php echo $artigo['titulo'] ?>
                </a>
            </h2>
            <p>
                <?php echo $artigo['descricao'] ?>
            </p>
        <?php endforeach ?>
    </div>
</body>

</html>