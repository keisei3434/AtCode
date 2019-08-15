<?php
    $stdin = trim(fgets(STDIN));
    $numbers = explode(' ', $stdin);
    $total = 0;
    
    for($i = 1; $i <= $numbers[0]; $i++) {
        $sum = floor($i / 10000)
          + floor(($i % 10000) / 1000) 
          + floor(($i % 1000) / 100) 
          + floor(($i % 100) / 10) 
          + floor(($i % 10));
      
        if ($sum >= $numbers[1] && $sum <= $numbers[2]) {
            $total += $i;
        }
    }
    
    echo $total;

?>
