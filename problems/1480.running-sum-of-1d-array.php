<?php
/**
 * https://leetcode-cn.com/problems/running-sum-of-1d-array/
 *
 * @param Integer[] $nums
 * @return Integer[]
 */
function runningSum($nums) {
    for ($i = 1; $i < count($nums); $i++) {
        $nums[$i] = $nums[$i-1] + $nums[$i];
    }

    return $nums;
}