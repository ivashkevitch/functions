<?php

function sum(string $x1, string $x2): string
{
    $len1 = strlen($x1);
    $len2 = strlen($x2);

    $result = '';

    $maxLen = $len1 > $len2 ? $len1 : $len2;
    $x2 = str_pad($x2, $maxLen, '0', STR_PAD_LEFT);
    $x1 = str_pad($x1, $maxLen, '0', STR_PAD_LEFT);

    $temp = 0;
    for ($i = $maxLen - 1; $i >= 0; $i--) {
        $sumX1X2 = $x1[$i] + $x2[$i];
        if ($temp > 0) {
            $sumX1X2 += $temp;
        }

        $temp = 0;
        if ($sumX1X2 > 9) {
            $temp = 1;
            $currentSum = $sumX1X2 % 10;
        } else {
            $currentSum = $sumX1X2;
        }

        $result = $currentSum . $result;
    }

    if ($temp > 0) {
        $result = $temp . $result;
    }

    return $result;
}

echo sum('1000000000000000009', '100000000000000000000000000000099');