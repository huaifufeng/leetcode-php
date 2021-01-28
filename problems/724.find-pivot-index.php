<?php
/**
 * https://leetcode-cn.com/problems/find-pivot-index/
 *
 * @param Integer[] $nums
 * @return Integer
 */
function pivotIndex($nums)
{
    $total = array_sum($nums);

    $left = 0;
    foreach ($nums as $index => $val) {
        if (2 * $left + $val == $total) {
            return $index;
        }
        $left += $val;
    }

    return -1;
}

function pivotIndex1($nums)
{
    $length = count($nums);
    if ($length == 0) {
        return -1;
    }
    if ($length == 1) {
        return 0;
    }

    $map = [
        $length - 1 => 0
    ];
    $right = 0;
    for ($i = $length - 2; $i >= 0; $i--) {
        $right = $right + $nums[$i + 1];
        $map[$i] = $right;
    }

    $left = 0;
    for ($j = 0; $j < $length; $j++) {
        if ($left == $map[$j]) {
            return $j;
        }

        $left += $nums[$j];
    }

    return -1;
}