<?php
/**
 * https://leetcode-cn.com/problems/split-a-string-in-balanced-strings/
 *
 * @param String $s
 * @return Integer
 */
function balancedStringSplit($s) {
    $total = 0;
    $diff = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == 'R') {
            $diff++;
        } else {
            $diff--;
        }

        if ($diff == 0) {
            $total++;
        }
    }

    return $total;
}