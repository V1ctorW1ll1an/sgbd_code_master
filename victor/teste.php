<?php

$alunos = [
    [
        'nome' => 'ana',
        'curso' => 'cco'
    ],
    [
        'nome' => 'joao',
        'curso' => 'adm'
    ],
    [
        'nome' => 'maria',
        'curso' => 'historia'
    ]
];

echo "count = " . count($alunos);

foreach ($alunos as $aluno) {
    echo '<br>';
    echo $aluno['nome'];
}
