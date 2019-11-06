<?php
    // Para criar uma classe filho de uma outra clase usamos a palavra EXTENDS para que caracteriza a herança
    class Funcionarios extends Pessoas{
        // Na herança herda todos os atributos do pai
        // Caso coloque mais atributos serão exclusivos do fihle
        public $matricula;

        // Da mesma forma com os metodos, os declarados no filho sao exclusivos
        public function trabalhar(){
            echo "You better work!";
        }
    }
?>