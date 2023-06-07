<?php

    $bool = true && false; // false
    var_dump($bool);

    $bool = true and false; // true
    var_dump($bool);

    $bool = (true and (true && false)); // false
    var_dump($bool);

    