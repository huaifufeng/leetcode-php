<?php
/**
 * https://leetcode-cn.com/problems/number-of-equivalent-domino-pairs/submissions/
 *
 * @param Integer[][] $dominoes
 * @return Integer
 */

function numEquivDominoPairs($dominoes) {
    $num = 0;
    $valMap = [];
    foreach ($dominoes as $val) {
        if ($val[0] > $val[1]) {
            $temp = $val[0];
            $val[0] = $val[1];
            $val[1] = $temp;
        }

        $v = $val[0] * 10 + $val[1];
        $num+=$valMap[$v];
        $valMap[$v]++;
    }

    return $num;
}