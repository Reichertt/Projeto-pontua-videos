<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Pontuavel;

// Classe responsável por calcular a pontuação de conteúdos pontuáveis.
class CalculadorPontuacao
{
    // Método que recebe um objeto Pontuavel e retorna sua pontuação.
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        // Chama o método recuperarPontuacao do objeto Pontuavel passado como parâmetro.
        return $conteudo->recuperarPontuacao();
    }
}