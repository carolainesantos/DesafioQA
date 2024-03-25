<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="avaliacao1.css">
  <title>Teste_QA</title>
</head>

<body>
  <div class="container">
    <h3>Escreva um algoritmo para encontrar um único número de um array</h3>
    <div class="output">
    <?php
    $numbersTest1 = [5, 3, 4, 3, 5, 5, 3];
    $counts = array_count_values($numbersTest1);
    $unique_number = array_search(1, $counts);
    echo "Array informado: [".implode(', ', $numbersTest1)."]";
    echo "<br/>Número não repetido: $unique_number";
  
    // Teste 2
    $numbersTest2 = [5, 3, 2];
    $counts = array_count_values($numbersTest2);
    $unique_number = array_search(1, $counts);
    echo "<br/><br/>Array informado: [".implode(', ', $numbersTest2)."]";
    echo "<br/>Número não repetido: $unique_number";

    /**
     * Foi possivel perceber que a função entrega o resultado esperado para a avaliação1, 
     * porém conforme a especificação da função (Searches the array for a given 
     * value and returns the first corresponding key if successful), ela só retornará o primeiro valor.
     **/ 
    ?>
    </div>
  </div>

  <div class="container">
    <h3>Verificação de Palíndromo</h3>
    <div class="output">
    <?php
    $palavra1 = "arara";

    $palavra = strtolower(str_replace(' ', '', $palavra1));
    $palavraInvertida = strrev($palavra);
   
    if ($palavra == $palavraInvertida) {
      echo "Palavra '$palavra1' é um palíndromo? " ." Sim";
    }

    $palavra2 = "batata";

    $teste = strtolower(str_replace(' ', '', $palavra2));
    $PalavraInvertida = strrev($teste);

    if ($teste == $PalavraInvertida) {
      echo "Palavra '$palavra2' é um palíndromo? " ." Sim";
    } else {
      echo "<br/>Palavra '$palavra2' é um palíndromo? " ." Não";
    }

    /**
     * Neste exemplo adicionei uma palavra secundaria 
     * pra verficar caso a mesma não seja um palindromo
     **/
    ?>
    </div>
  </div>

  <div class="container">
    <h3>Ordenação de Números Pares e Ímpares</h3>
    <div class="output">
    <?php
    /**
     * Este exercício só consegui realizar utilizando exemplos
     * https://www.php.net/manual/pt_BR/function.usort.php
     * tive bastante dificuldade para entender como ordenar corretamente
     * gostei bastante do desafio.
     */
    $num = [3, 1, 2, 4, 6, 5];
    echo "Array informado: [".implode(', ', $num)."]";
    usort($num, function($a, $b) {
      if ($a % 2 == 0 && $b % 2 != 0) {
        return -1;
      } else if ($a % 2 != 0 && $b % 2 == 0) {
        return 1;
      }
    });
    echo "<br/>Array ordenado: [".implode(', ', $num)."]";
    ?>
    </div>
  </div>

  <div class="container">
    <h3>Fatorial de um número</h3>
    <div class="output">
    <?php
    $number = 5;
    
    $fatorial = 1;
    for ($i = 1; $i <= $number; $i++) {
      $fatorial *= $i;
    }
    echo "Fatorial: ".$fatorial;
    ?>
    </div>
  </div>

  <div class="container">
    <h3>Fibonacci</h3>
    <div class="output">
    <?php
    $n = 6;
    $ultimo = 1;
    $penultimo = 0;
    $atual = 1;
    $count = 1;
    $arrayFib = [];
    
    while ($count <= $n-1) {
      array_push($arrayFib, $atual);
      $atual = $ultimo + $penultimo;
      $penultimo = $ultimo;
      $ultimo = $atual;
      $count++;
    }
    echo "Array informado: [".implode(', ', $arrayFib)."]";
    ?>
    </div>
  </div>

</body>
</html>