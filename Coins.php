<?php
    $A = 500;
    $B = 100;
    $C = 50;

    while ($line = fgets(STDIN)) {
       $inputs[] = trim($line);
    }
    
    $maxACount = floor($inputs[3] / $A);
    $remainder = $inputs[3] % $A;

    $maxBCountInRemainder = floor($remainder / $B);

    $aCount = $maxACount > $inputs[0] ? $inputs[0] : $maxACount;
    $cCount = ($remainder % $B) / $C;
    
    $index = 0;
    $kinds = 0;

    while($aCount >= 0) {
        $devide = $maxACount - $aCount;
        $maxBCount = $maxBCountInRemainder + $devide * $A / $B;
        $bCount = $maxBCount > $inputs[1] ? $inputs[1] : $maxBCount;
      
        while($bCount >= 0) {
            if ($cCount + ($maxBCount - $bCount) * 2 <= $inputs[2] && ($maxBCount - $bCount) >= 0) {
                $kinds++;
            }
            $bCount--;
        }
        $aCount--;
    }
    echo $kinds;

?>
