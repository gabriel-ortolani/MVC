<?php
    // Incluir o arquivo 'aluno.php', que contem a classe Aluno.
    // incluir o alunosView.php, que contem a função exibirAlunos(),
    require_once 'aluno.php';
    require_once 'alunosView.php';

    // Declaração da classe alunoController.
    // Essa classe é responsavel pela comunicação entre o aluno.php(Model) e o alunosView.php(View).
    class alunoController{
        // Criar uma propriedade privada chamada $model.
        // Ela sera usada para armazanar uma instancia da classe aluno,
        
        private $model;

        // Criar um metodo constructor da classe, ele é chamado automaticamente quando um objeto for criado,
        public function __construct(){
            // Criar uma nova instancia da classe aluno, e armazenar na propriedade $model
            $this->model=new Aluno();
        }
        // metodo publico chamado listar.
        // Ele serve para buscar a lista de alunos e passar para o view.
        public function listar(){
            // chama o metodo listarAlunos()do modelo e armazena na variavel $alunos.
            $alunos = $this->model->listarAlunos();
            // chama a função exibir alunos e envia a lista para mostrar no navegador.
            exibirAlunos($alunos);
        }
    }
    // execução do codigo
    // aqui fora da classe é criado um objeto do tipo AlunoController.
    $controler = new alunoController();
    // Apos criar o Objeto, é chamado o metodo listar();
    $controler->listar();
?>