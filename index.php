
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
  include("css/estilos.php");
  //Questão 1
  /*$nome = "Rogerio";
  echo $nome;*/

  //Questão 2
  //echo $_GET["num1"]+$_GET["num2"];

  //Questão 3
  /*$frutas = ["Maça","Banana","Laraja"];

  foreach($frutas as $f){
      echo $f."<br>";
  }*/

  //Questão 4
  /*echo $_GET["texto"];
  <form action="index.php" method="get">
      <label for="texto">Insira o texto</label>
      <input type="text" id="texto" name="texto">

      <button type="submit">ver texto</button>

  </form>*/

  //Questão 5
  /*$numeros = [10,20,30,40];
  
  echo array_sum($numeros);
  */
  
  ////Questão 6
  /*
  <form action="index.php" method="get">
      <label for="nome">Insira o nome do funcionario</label>
      <input type="text" id="nome" name="nome"><br>

      <label for="salario">Insira o salario do funcionario</label>
      <input type="text" id="salario" name="salario"><br>

      <label for="qntDep">Insira a quantidade de dependentes do funcionario</label>
      <input type="number" id="quantDep" name="quantDep"><br>

      <button type="submit">Calcular salario</button>

  </form>
  if($_GET["quantDep"] == ""){
      echo "O salário de ".$_GET["nome"]." é de ".$_GET["salario"];
  }
  else{
      echo "O salário de ".$_GET["nome"]." é de ".($_GET["salario"]+($_GET["quantDep"]*150));
  }*/

  //Questão 7
  /*if($_GET["idade"] >= 18){
      echo "Voçê é maior de idade";
  }
  else{
      echo "Voçê é menor de idade";
  }*/
  //Questão 8

  /*$cont = 1;
  while($cont <= 10){
      echo $cont."<br>";
      $cont++;
  }*/
  
  //Questão 9
  /*function fatorial($n){
      if($n == 1){
          return 1;
      }
      return $n*fatorial($n-1);
  }

  echo fatorial($_GET["numeros"]);*/

  class pessoa{

     public $nome = "João";
     public $cpf;
     public $idade;
      
     function __construct($n,$c,$i){
          $this->nome = $n;
          $this->cpf = $c;
          $this->idade = $i;
     }


  }

  $p1 = new pessoa("Rogerio",9858,20);
  $p2 = new pessoa("Tatariun",3281,20);
  $p3 = new pessoa("Junior",9882,22);
  $p4 = new pessoa("Palafoz",1234,19);
  $p5 = new pessoa("Endriw",5909,24);

  $pessoas[] = $p1;
  $pessoas[] = $p2;
  $pessoas[] = $p3;
  $pessoas[] = $p4;
  $pessoas[] = $p5;
  
  $tab = 
  "<tr>
  <th>Nome</th>
  <th>CPF</th>
  <th>Idade</th>
  </tr>";

  foreach($pessoas as $p){
    $tab .= "<tr>
            <td>".$p->nome."</td>
            <td>".$p->cpf."</td>
            <td>".$p->idade."</td>
            </tr>";
  }

 
?>
<table>
    <?=$tab;?>
</table>
</body>
</html>


