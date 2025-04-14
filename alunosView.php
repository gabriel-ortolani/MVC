<?php
    // Declara uma função chamada exibirAlunos que recebe o parametro $alunos.
    // Esse parametro é esperado com um array com informações dos alunos.
    function exibirAlunos($alunos){
        // imprime na tela um titulo h2 e abre uma lista não ordenada ul.
        echo "<h2>Lista de Alunos:</h2> <ul>";


        // inicia um loop foreach, que percorre cada item do array $alunos.
        // Cada item é armazenado temporariamente na variavel $aluno.
        foreach ($alunos as $aluno){
            // para cada aluno, imprime um item da lista (li),
            // exibe o nome do aluna e sua idade, formatados como "Nome - Idade anos".
            echo "<li>{$aluno['nome']} - {$aluno['idade']} anos</li>";
        }
        echo "</ul>";
    }
?>