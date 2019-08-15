<?php
    while ($line = fgets(STDIN)) {
       $inputs[] = trim($line);
    }
    array_shift($inputs);
    $result = array_unique($inputs);
    echo count($result);
?>
