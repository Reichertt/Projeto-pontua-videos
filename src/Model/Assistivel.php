<?php 

namespace Alura\Solid\Model;

// Interface que define um contrato para objetos que podem ser assistidos.
interface Assistivel 
{
    // Método que indica a ação de assistir.
    public function assistir(): void;
}