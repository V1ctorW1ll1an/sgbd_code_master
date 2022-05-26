<?php

class Artigo
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodosArtigos(): array
    {
        $getArticles = 'SELECT * FROM artigos';

        $query = $this->mysql->query($getArticles);

        $artigos = $query->fetch_all(MYSQLI_ASSOC);

        return $artigos;
    }

    public function getById(string $id)
    {
        $selecionaArtigo = $this->mysql->prepare("SELECT * FROM artigos WHERE id=?");
        $selecionaArtigo->bind_param('s', $id);

        $selecionaArtigo->execute();

        $artigo = $selecionaArtigo->get_result()->fetch_assoc();

        return $artigo;

    }

    public function adicionaArtigo(string $titulo, string $conteudo){
        $adicionar = $this->mysql->prepare("INSERT INTO artigos (titulo, conteudo) VALUES (?,?)");
        $adicionar->bind_param('ss', $titulo, $conteudo);
        $adicionar->execute();
    }

    public function excluirArtigos(string $id_artigo){
        $excluir = $this->mysql->prepare("DELETE FROM artigos WHERE id=?");
        $excluir->bind_param('s', $id_artigo);        
        $excluir->execute();
    }

    public function atualizarArtigo(string $id_artigo, string $titulo, string $conteudo){
        $atualizar = $this->mysql->prepare("UPDATE artigos SET titulo=?, conteudo=? WHERE id=?");
        
        if($atualizar === false){
            echo "erroorrr";
           
        }
        $atualizar->bind_param('sss', $titulo, $conteudo, $id_artigo);
        $atualizar->execute();
    }
}