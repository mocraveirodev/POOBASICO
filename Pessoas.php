<!-- O nome da classe começa com letra maiuscula -->
<!-- Deve ter apenas uma classe por arquivo -->

<?php
    class Pessoas {
        // a visibilidade do atributo é definido colocando a palavra reservada antes da variavel.
        public $nome;
        private $idade;
        protected $cpf;
        public $email;

        // os metodos também seguem a mesma regra de visibilidade
        public function falar(){
            echo "e ai!";
        }

        // Quando temos atributos privados ou protegidos precisamos usar funçoes especiais para atribuir e/ou pegar valores delas
        // Essas funções sao conhecidas como GETTERS E SETTERS
        // As funções GET servem para resgatar o valor dos atributos das classes
        // As funções SET servem para atribuir valor para atributo

        public function setIdade($idade) {
            $this->idade= $idade;
        }
        public function setCpf($cpf) {
            $this->cpf= $cpf;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function getCpf() {
            return $this->cpf;
          }
    }
?>