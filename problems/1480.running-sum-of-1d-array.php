<?php
/**
 * https://leetcode-cn.com/problems/running-sum-of-1d-array/
 *
 * @param Integer[] $nums
 * @return Integer[]
 */
function runningSum($nums) {
    $runningSums = [];
    foreach ($nums as $index => $value) {
        if ($index == 0) {
            $runningSums[] = $value;
        } else {
            $runningSums[] = $runningSums[$index-1] + $value;
        }
    }

    return $runningSums;
}