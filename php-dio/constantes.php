<?php


// Entregador de delivery ganha 80 reais por dia porém ainda tem as gorjetas dos clientes
define("valorDia", "80");
define("gorjetas", "40");

echo "<h1>";
echo("Ganhou: ");
echo valorDia + gorjetas;
echo "</h1>";