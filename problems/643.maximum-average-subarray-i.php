<?php
/**
 * https://leetcode-cn.com/problems/maximum-average-subarray-i/
 *
 * @param Integer[] $nums
 * @param Integer $k
 * @return Float
 */
function findMaxAverage($nums, $k)
{
    $sum = 0;
    for ($i = 0; $i < $k; $i++) {
        $sum += $nums[$i];
    }

    $avg = $sum / $k;
    $len = count($nums);
    for ($j = $k; $j < $len; $j++) {
        $sum = $sum - $nums[$j - $k] + $nums[$j];
        $temp = $sum / $k;
        if ($temp > $avg) {
            $avg = $temp;
        }
    }

    return $avg;
}