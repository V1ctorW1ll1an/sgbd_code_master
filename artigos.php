<?php

class Artigo
{

    public function exibirTodosArtigos(): array
    {
        $artigos = [
            [
                'titulo' => 'Primeiros passos com Spring',
                'link' => 'primeiros-passos-com-spring.html',
                'descricao' => 'Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
                        programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.'
            ],
            [
                'titulo' => 'O que é Metodologia Ágil?',
                'link' => 'O que é Metodologia Ágil?',
                'descricao' => 'Uma vez fui contratada por uma empresa que desenvolvia softwares e aplicativos para outras empresas.'
            ],
            [
                'titulo' => 'Como é o funil do Growth Hacking?',
                'link' => 'como-e-o-funil-do-growth-hacking.html',
                'descricao' => ' Minha amiga que possui um clube de assinaturas começou a utilizar o Growth Hacking após conhecer um pouco
                    mais sobre ele.'
            ],
            [
                'titulo' => 'Estrutura atomica',
                'link' => 'https://www.todamateria.com.br/estrutura-atomica/#:~:text=Resposta%3A%20As%20part%C3%ADculas%20fundamentais%20do,%3A%20pr%C3%B3tons%2C%20el%C3%A9trons%20e%20n%C3%AAutrons.',
                'descricao' => 'A estrutura do átomo é composta por três partículas fundamentais: prótons (com carga positiva), nêutrons (partículas neutras) e elétrons (com carga negativa).'
            ],
        ];

        return $artigos;
    }
}
