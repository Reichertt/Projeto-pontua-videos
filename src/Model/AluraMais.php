<?php

namespace Alura\Solid\Model;

// A classe AluraMais estende a classe Video e implementa as interfaces Pontuavel e Assistivel.
class AluraMais extends Video implements Pontuavel, Assistivel
{
    // Atributo privado para armazenar a categoria do vídeo.
    private $categoria;

    // Construtor que recebe o nome e a categoria do vídeo.
    public function __construct(string $nome, string $categoria)
    {
        // Chama o construtor da classe pai (Video) passando o nome.
        parent::__construct($nome);

        // Define a categoria específica da instância.
        $this->categoria = $categoria;
    }

    // Método para recuperar a URL do vídeo.
    public function recuperarUrl(): string
    {
        // Constrói a URL usando a categoria, substituindo espaços por hifens e convertendo para minúsculas.
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria));
    }

    // Método para recuperar a pontuação do vídeo.
    public function recuperarPontuacao(): int
    {
        // Calcula a pontuação multiplicando a duração do vídeo por 2.
        return $this->minutosDeDuracao() * 2;
    }
}