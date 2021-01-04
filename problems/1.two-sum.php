<?php

/**
 * https://leetcode-cn.com/problems/two-sum/submissions/
 *
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target)
{
    $checkNums = [];
    $length = count($nums);
    for ($i = 0; $i < $length; $i++) {
        $left = $target - $nums[$i];
        $lastIndex = $checkNums[$left] ?? -1;
        if ($lastIndex == -1) {
            $checkNums[$nums[$i]] = $i;
        } else {
            return [$lastIndex, $i];
        }
    }
}