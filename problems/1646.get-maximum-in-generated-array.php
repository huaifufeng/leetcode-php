<?php
/**
 * https://leetcode-cn.com/problems/get-maximum-in-generated-array/
 *
 * @param Integer $n
 * @return Integer
 */
function getMaximumGenerated($n)
{
    if ($n == 0) {
        return 0;
    }

    if ($n == 1) {
        return 1;
    }

    $allMaps = [0, 1];
    $max = 0;
    for ($i = 2; $i <= $n; $i++) {
        $remainder = $i % 2;
        $index = $i >> 1;
        if ($remainder == 0) {
            $allMaps[$i] = $allMaps[$index];
        } else {
            $allMaps[$i] = $allMaps[$index] + $allMaps[$index+1];
        }

        if ($allMaps[$i] > $max) {
            $max = $allMaps[$i];
        }
    }

    return $max;
}