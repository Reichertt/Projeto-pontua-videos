<?php

namespace Alura\Solid\Model;

// Classe que representa um vídeo.
class Video
{
    /** @var bool */
    // Propriedade protegida que indica se o vídeo foi assistido.
    protected $assistido = false;
    
    /** @var string */
    // Propriedade protegida que armazena o nome do vídeo.
    protected $nome;
    
    /** @var \DateInterval */
    // Propriedade protegida que armazena a duração do vídeo como um objeto \DateInterval.
    protected $duracao;

    // Construtor que recebe o nome do vídeo.
    public function __construct(string $nome)
    {
        // Inicializa as propriedades.
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = \DateInterval::createFromDateString('0');
    }

    // Método para marcar o vídeo como assistido.
    public function assistir(): void
    {
        $this->assistido = true;
    }

    // Método para obter a duração do vídeo em minutos.
    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    // Método para recuperar a URL do vídeo.
    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['nome' => $this->nome]);
    }
}
