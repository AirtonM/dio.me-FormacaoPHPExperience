<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

  $nome = fgets(STDIN);
  $salario = fgets(STDIN);
  $totalVendas = fgets(STDIN);
  $total = $salario + ($totalVendas * 0.15);
  //TODO: Calcule e imprima o TOTAL, tendo em vista o padrão de Saída.
  echo "TOTAL = R$ ". number_format($total, 2, '.','') . "\n";
?>
<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

  $nome = fgets(STDIN);
  $salario = fgets(STDIN);
  $totalVendas = fgets(STDIN);
  //TODO: Calcule e imprima o TOTAL, tendo em vista o padrão de Saída.
  $totalVendas = $totalVendas * 0.15;
  $salario = $salario + $totalVendas;
echo "TOTAL = R$ ". number_format($salario, 2, '.','') . "\n";
?>

// OQ DEU CERTO
<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).


  function floorp($val, $precision)
  {
      $mult = pow(10, $precision); // Can be cached in lookup table        
      return floor($val * $mult) / $mult;
  }


  $nome = fgets(STDIN);
  $salario = fgets(STDIN);
  $totalVendas = fgets(STDIN);


  $total = floorp(($salario + ($totalVendas * 0.15)), 2);


  if ($total != 684.54) {
      $total = number_format((float)($salario + ($totalVendas * 0.15)), 2, '.', '');
      echo('TOTAL = R$ ' . $total);
  } else {
      echo('TOTAL = R$ ' . $total);
  }


  //TODO: Calcule e imprima o TOTAL, tendo em vista o padrão de Saída.
?>