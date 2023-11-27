<?php

namespace Alura\Solid\Model;

// Interface que define um contrato para objetos que podem ser pontuados.
interface Pontuavel
{
    // Método que deve ser implementado pelas classes que implementam esta interface.
    // Retorna um valor inteiro representando a pontuação do objeto.
    public function recuperarPontuacao(): int;
}