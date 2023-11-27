<?php

namespace Alura\Solid\Model;

// Classe responsável pelo FeedBack
class FeedBack 
{

    /** @var int */
    private $nota;

    /** @var string|null */
    private $depoimento;

    public function __construct(int $nota, ?string $depoimento)
    {
        // Caso a nota seja menor que 9, depoimento obrigatorio
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    public function recuperarNota(): int
    {
        return $this->nota;
    }

    public function recuperarDepoimento(): ?string
    {
        return $this->depoimento;
    }
}