<?php

class Escola{

 public $nome = "Arte de Aprender";
 public $ensino = "Martenal";
 public $referencia = "umas das melhores escola da cidade";
 public $horario = "7:30 ás 19:00";
 public $quantidadeAlunos = "150";

 function conhecendoEscola(){
     echo "O nome da escola é {$this->nome}, é considerada {$this->referencia},
     trabalhando apenas com os bebês ou seja o {$this->ensino}. Localizada na cidade de Paris. <br>";
 }

 function funcionamento(){
     echo "A escola {$this->nome}, funciona no horário {$this->horario} da noite, com a quantidade de {$this->quantidadeAlunos} alunos.  <br>";
 } 

 function convite(){
     echo "Venha conhe a nossa escola {$this->nome},<br> 
     Garanto que o seu bebê vai ter o melhor cuidado e conforto, <br>
     Venha fazer parte da nossa família, Grandiosamente {$this->nome}, {$this->referencia}. ";
 }

}
$pessoa =  new escola;


$pessoa ->nome = "Arte de Aprender";
$pessoa ->ensino = "Martenal";
$pessoa ->referencia = "umas das melhores escola da cidade";
$pessoa ->horario = "7:30 ás 19:00";
$pessoa ->quantidadeAlunos = "150";

$pessoa ->conhecendoEscola();
echo "<br>";

$pessoa ->nome = "Arte de Aprender 2";
$pessoa ->horario = "6:00 ás 22:00";
$pessoa ->quantidadeAlunos = "200";

$pessoa ->funcionamento();
echo "<br>";

$pessoa ->nome = "Arte de Aprender 2";
$pessoa ->referencia = "Uma Escola Exempla";
$pessoa ->convite();
