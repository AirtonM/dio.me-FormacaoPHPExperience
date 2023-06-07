<?php

    echo "Pós-incremento:\n";
    $a = 5;
    echo "Deve ser 5: " . $a++ . "\n";
    echo "Deve ser 6: " . $a . "\n";
    
    echo "\nPré-incremento:\n";
    $a = 5;
    echo "Deve ser 6: " . ++$a . "\n";
    echo "Deve ser 6: " . $a . "\n";
    
    echo "\nPós-decremento:\n";
    $a = 5;
    echo "Deve ser 5: " . $a-- . "\n";
    echo "Deve ser 4: " . $a . "\n";
    
    echo "\nPré-decremento:\n";
    $a = 5;
    echo "Deve ser 5: " . --$a . "\n";
    echo "Deve ser 6: " . $a . "\n";