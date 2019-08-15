<?php
    while ($line = fgets(STDIN)) {
       $inputs[] = trim($line);
    }
    $numbers = explode(" ", $inputs[1]);
    $count = 0;
    $finish = false;

    while (!$finish) {
        foreach($numbers as $index => $number) {
            if ($number % 2 != 0) {
                $finish = true;
                break;
            }
            $numbers[$index] = $number / 2;
        }
        $count++;
    }

    echo $count-1;
?>
