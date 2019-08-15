<?php
    while ($line = fgets(STDIN)) {
        $inputs[] = trim($line);
    }
    $numbers = explode(' ', $inputs[1]);
    rsort($numbers);
    $diff = 0;

    for ($i = 0; $i < ceil(count($numbers) / 2); $i++) {
      $bob = isset($numbers[$i * 2 + 1]) ? $numbers[$i * 2 + 1] : 0;
      $diff += $numbers[$i * 2] - $bob;
    }

    echo $diff;
?>
