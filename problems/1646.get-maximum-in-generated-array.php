<?php
/**
 * https://leetcode-cn.com/problems/get-maximum-in-generated-array/
 *
 * @param Integer $n
 * @return Integer
 */
function getMaximumGenerated($n)
{
    if ($n == 0 || $n == 1) {
        return $n;
    }
    $allMaps = [0, 1];
    $max = 1;
    for ($i = 2; $i <= $n; $i++) {
        $index = $i >> 1;
        $allMaps[$i] = $allMaps[$index] + ($i%2)*$allMaps[$index+1];

        if ($allMaps[$i] > $max) {
            $max = $allMaps[$i];
        }
    }

    return $max;
}