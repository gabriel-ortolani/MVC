<?php

// Defina uma classe chamada aluno
class aluno{
    // Criar uma propriedade privada(Encapsulamento) chamada $alunos
    // Essa propriedade é um array que armazena dados e alunos.
    // Cada aluno é representado por um array associativo com o nome e idade.
    // [] = array
    private $alunos = [
        ['nome' => 'Gabriel', 'idade' => 17],
        ['nome' => 'Miguel', 'idade' => 18],
        ['nome' => 'yago', 'idade' => 16]
    ];

    // Define um método publico chamado ListarAlunos.
    // Esse metodo serve para "retornar" o conteudo do array $alunos.

    public function ListarAlunos(){
        return $this->alunos;
    }
}

?>