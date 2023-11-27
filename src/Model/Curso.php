<?php

namespace Alura\Solid\Model;

// Classe que representa um curso e implementa as interfaces Pontuavel e Assistivel.
class Curso implements Pontuavel, Assistivel
{
    // Atributos privados para armazenar o nome do curso, os vídeos associados e os feedbacks recebidos.
    private $nome;
    private $videos;
    private $feedbacks;

    // Construtor que recebe o nome do curso e inicializa os arrays de vídeos e feedbacks.
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    // Método para receber feedbacks associados ao curso.
    public function receberFeedback(FeedBack $feedBack): void
    {
        $this->feedbacks[] = $feedBack;
    }

    // Método para adicionar um vídeo ao curso.
    public function adicionarVideo(Video $video)
    {
        // Verifica se o vídeo tem mais de 3 minutos, caso contrário, lança uma exceção.
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Vídeo muito curto');
        }

        // Adiciona o vídeo ao array de vídeos do curso.
        $this->videos[] = $video;
    }

    /** @return Video[] */
    // Método para recuperar a lista de vídeos associados ao curso.
    public function recuperarVideos(): array
    {
        return $this->videos;
    }

    // Método para recuperar a pontuação do curso. Neste caso, a pontuação é fixa em 100.
    public function recuperarPontuacao(): int
    {
        return 100;
    }

    // Método para realizar a ação de assistir ao curso, iterando sobre os vídeos e chamando o método assistir de cada um.
    public function assistir(): void
    {
        foreach ($this->recuperarVideos() as $video) {
            $video->assistir();
        }
    }
}
