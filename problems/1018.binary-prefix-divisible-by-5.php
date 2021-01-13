<?php
/**
 * https://leetcode-cn.com/problems/binary-prefix-divisible-by-5/
 *
 * @param Integer[] $A
 * @return Boolean[]
 */
function prefixesDivBy5($A) {
    $value = 0;
    $aLength = count($A);
    $result = [];
    for ($i = 0; $i < $aLength; $i++) {
        $value = ($value * 2 + $A[$i]) % 5;
        $result[] = $value == 0;

    }

    return $result;
}