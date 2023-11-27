<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assistivel;

// Classe responsável por realizar a ação de assistir a conteúdos assistíveis.
class Assistidor
{
    // Método que recebe um objeto Assistivel e o marca como assistido.
    public function assistir(Assistivel $conteudo)
    {
        // Chama o método assistir do objeto Assistivel passado como parâmetro.
        $conteudo->assistir();
    }
}