<?php

/*
 * Matriz
 * 
 * Array
  (
  [0] => Array
  (
  [item] => 0
  [peso] => 10
  [valor] => 30
  )

  [1] => Array
  (
  [item] => 1
  [peso] => 25
  [valor] => 15
  )

  [2] => Array
  (
  [item] => 2
  [peso] => 20
  [valor] => 10
  )

  [3] => Array
  (
  [item] => 3
  [peso] => 15
  [valor] => 25
  )

  )
 */

class Mochila {

    private $vetorSolucao;
    private $custoParcial;
    private $pesoParcial;
    private $pesoMaximo;
    private $matriz;
    private $qtdItens;
    private $custoTotal;

    public function __construct($matriz, $pesoMaximo, $qtdItens) {
        $this->matriz = $matriz;
        $this->pesoMaximo = $pesoMaximo;
        $this->qtdItens = $qtdItens;
        $this->custoParcial = 0;
        $this->pesoParcial = 0;
    }

    public function maiorValor() {
        /*
         * $vetDec é um array
         * Esse array recebe a coluna valor da matriz
         * Array
          (
          [0] => 30
          [1] => 15
          [2] => 10
          [3] => 25
          )
         * 
         */
        for ($i = 0; $i < $this->qtdItens; $i++) {
            $vetDec[$i] = $this->matriz[$i]['valor'];
        }
        /*
         * ordena o array mantendo os indices 
         * Array
          (
          [0] => 30
          [3] => 25
          [1] => 15
          [2] => 10
          )
         */
        arsort($vetDec);

        return $vetDec;
    }

    public function menorPeso() {
        /*
         * $vetDec é um array
         * Esse array recebe a coluna peso da matriz
         * Array
          (
          [0] => 10
          [1] => 25
          [2] => 20
          [3] => 15
          )
         * 
         */
        for ($i = 0; $i < $this->qtdItens; $i++) {
            $vetMenor[$i] = $this->matriz[$i]['peso'];
        }
        /*
         * ordena o array mantendo os indices 
         * Array
          (
          [0] => 10
          [3] => 15
          [2] => 20
          [1] => 25
          )
         */
        asort($vetMenor);

        return $vetMenor;
    }

    public function maiorRazao() {
        /*
         * $vetDec é um array
         * Esse array recebe a coluna razão da matriz
         * Array
          (
          [0] => 3
          [1] => 0.6
          [2] => 0.5
          [3] => 1.6666
          )
         * 
         */
        for ($i = 0; $i < $this->qtdItens; $i++) {
            $vetRazao[$i] = $this->matriz[$i]['razao'];
        }
        /*
         * ordena o array em ordem decrescente mantendo os indices 
         * Array
          (
          [0] => 3
          [3] => 1.6666
          [1] => 0.6
          [2] => 0.5
          )
         */
        arsort($vetRazao);

        return $vetRazao;
    }

    public function getCustoParcial() {
        return $this->custoParcial;
    }

    public function getPesoParcial() {
        return $this->pesoParcial;
    }

    function getVetorSolucao() {
        return $this->vetorSolucao;
    }

    public function mochilaMaiorValor() {
        $itemValor = $this->maiorValor();
        /*
         * $item => Número do item 
         * $value => Valor do Item 
         */
        foreach ($itemValor as $item => $value) {
            if ($this->pesoParcial + $this->matriz[$item]['peso'] <= $this->pesoMaximo) {
                $this->vetorSolucao[] = $item;
                $this->custoParcial = $this->custoParcial + $value;
                $this->pesoParcial = $this->pesoParcial + $this->matriz[$item]['peso'];
            }
        }
    }

    public function mochilaMenorPeso() {
        $itemPeso = $this->menorPeso();
        /*
         * $item => Número do item 
         * $value => Peso do item 
         */
        foreach ($itemPeso as $item => $value) {
            if ($this->pesoParcial + $this->matriz[$item]['peso'] <= $this->pesoMaximo) {
                $this->vetorSolucao[] = $item;
                $this->custoParcial = $this->custoParcial + $this->matriz[$item]['valor'];
                $this->pesoParcial = $this->pesoParcial + $value;
            }
        }
    }

    public function mochilaMaiorRazao() {
        $itemValor = $this->maiorRazao();
        /*
         * $item => Número do item 
         * $value => Valor da razão
         */
        foreach ($itemValor as $item => $value) {
            if ($this->pesoParcial + $this->matriz[$item]['peso'] <= $this->pesoMaximo) {
                $this->vetorSolucao[] = $item;
                $this->custoParcial = $this->custoParcial + $this->matriz[$item]['valor'];
                $this->pesoParcial = $this->pesoParcial + $this->matriz[$item]['peso'];
            }
        }
    }

}
