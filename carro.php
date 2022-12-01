<?php

class Carro{

 public $marca;
 public $km;
 public $cor;
 public $estadoCarro;
 public $estetica;

 function venda(){
     echo "Vendo um carro {$this->marca} {$this->estadoCarro}, com {$this->km} km rodado, da cor {$this->cor} . <br>";
 }

 function limpeza(){
     echo "Mandamos o carro todo esterelizado {$this->estetica}, é emplacado .  <br>";
 } 

 function convinte(){
     echo "{$this ->marca} e de 4 portas, completo. Todo eletrico. <br>";
 }

}
$pessoa =  new carro;

$pessoa ->marca = "Siena - FIAT";
$pessoa ->km = "12.000";
$pessoa ->cor = "Preto";
$pessoa ->estadoCarro= "Semi Novo";
$pessoa->estetica="Limpo";

$pessoa ->venda();



$pessoa->estetica="Limpo";

$pessoa ->limpeza();


$pessoa ->marca = "Siena - FIAT";

$pessoa ->convinte();