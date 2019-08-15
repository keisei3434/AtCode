<?php
    $stdin = trim(fgets(STDIN));
    $numbers = explode(' ', $stdin);
    if ($numbers[0] % 2 != 0 && $numbers[1] % 2 != 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
?>
