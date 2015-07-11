<?php

include 'classe/mochila.php';

/*
  $matriz[0]['item'] = 0;
  $matriz[0]['peso'] = 10;
  $matriz[0]['valor'] = 30;
  $matriz[0]['razao'] = 30/10;

  $matriz[1]['item'] = 1;
  $matriz[1]['peso'] = 25;
  $matriz[1]['valor'] = 15;
  $matriz[1]['razao'] = 15/25;

  $matriz[2]['item'] = 2;
  $matriz[2]['peso'] = 20;
  $matriz[2]['valor'] = 10;
  $matriz[2]['razao'] = 10/20;

  $matriz[3]['item'] = 3;
  $matriz[3]['peso'] = 15;
  $matriz[3]['valor'] = 25;
  $matriz[3]['razao'] = 25/15;
 */
$matriz[0]['item'] = 0;
$matriz[0]['peso'] = 3;
$matriz[0]['valor'] = 9;
$matriz[0]['razao'] = 9 / 3;

$matriz[1]['item'] = 1;
$matriz[1]['peso'] = 6;
$matriz[1]['valor'] = 13;
$matriz[1]['razao'] = 13 / 6;

$matriz[2]['item'] = 2;
$matriz[2]['peso'] = 2;
$matriz[2]['valor'] = 5;
$matriz[2]['razao'] = 5 / 2;

$matriz[3]['item'] = 3;
$matriz[3]['peso'] = 4;
$matriz[3]['valor'] = 10;
$matriz[3]['razao'] = 10 / 4;

$matriz[4]['item'] = 4;
$matriz[4]['peso'] = 5;
$matriz[4]['valor'] = 16;
$matriz[4]['razao'] = 16 / 5;

$matriz[5]['item'] = 5;
$matriz[5]['peso'] = 7;
$matriz[5]['valor'] = 20;
$matriz[5]['razao'] = 20 / 7;

$matriz[6]['item'] = 6;
$matriz[6]['peso'] = 1;
$matriz[6]['valor'] = 4;
$matriz[6]['razao'] = 4 / 1;

$matriz[7]['item'] = 7;
$matriz[7]['peso'] = 8;
$matriz[7]['valor'] = 27;
$matriz[7]['razao'] = 27 / 8;

$matriz[8]['item'] = 8;
$matriz[8]['peso'] = 10;
$matriz[8]['valor'] = 28;
$matriz[8]['razao'] = 28 / 10;

echo "<pre>";
print_r($matriz);
echo "</pre>";

$qtdItens = 9;
$pesoMaximo = 20;

echo "ITEM DE MAIOR VALOR: Retorna os itens e o custo";
echo "</br>";
$resultMaiorValor = new Mochila($matriz, $pesoMaximo, $qtdItens);

$resultMaiorValor->mochilaMaiorValor();
echo "</br>";
echo "Custo Parcial =" . $resultMaiorValor->getCustoParcial();
echo "</br>";
echo "Peso Parcial =" . $resultMaiorValor->getPesoParcial();
echo "</br>";
echo "<pre>";
print_r($resultMaiorValor->getVetorSolucao());
echo "</pre>";
echo "</pre>";

echo "ITEM DE MENOR PESO: Retorna os itens e o custo";

$resultMenorPeso = new Mochila($matriz, $pesoMaximo, $qtdItens);
echo "</br>";
$resultMenorPeso->mochilaMenorPeso();
echo "</br>";
echo "Custo Parcial =" . $resultMenorPeso->getCustoParcial();
echo "</br>";
echo "Peso Parcial =" . $resultMenorPeso->getPesoParcial();
echo "</br>";
echo "<pre>";
print_r($resultMenorPeso->getVetorSolucao());
echo "</pre>";


echo "ITEM DE MAIOR Razão: Retorna os itens e o custo";
echo "</br>";
$resultMaiorRazao = new Mochila($matriz, $pesoMaximo, $qtdItens);

$resultMaiorRazao->mochilaMaiorRazao();
echo "</br>";
echo "Custo Parcial =" . $resultMaiorRazao->getCustoParcial();
echo "</br>";
echo "Peso Parcial =" . $resultMaiorRazao->getPesoParcial();
echo "</br>";
echo "<pre>";
print_r($resultMaiorRazao->getVetorSolucao());
echo "</pre>";
echo "</pre>";