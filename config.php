<?php

$mysql = new mysqli("localhost", "root", "", "blog", 8081);

$mysql->set_charset("utf8");

$notConnected = !$mysql;

if ($notConnected) {
    echo "Erro: banco conectado!";
}
