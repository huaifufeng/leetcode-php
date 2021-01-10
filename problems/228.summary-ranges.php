<?php
/**
 * https://leetcode-cn.com/problems/summary-ranges/
 *
 * @param Integer[] $nums
 * @return String[]
 */
function summaryRanges($nums)
{
    $numsLen = count($nums);
    if ($numsLen == 0) {
        return [];
    }

    if ($numsLen == 1) {
        return [strval($nums[0])];
    }

    $left = $right = $nums[0];
    $ret = [];
    for ($i = 1; $i < $numsLen; $i++) {
        if ($nums[$i] == $right+1) {
            $right++;
            continue;
        }

        if ($left == $right) {
            $ret[] = strval($left);
        }else {
            $ret[] = $left . "->" . $right;
        }

        $left = $right = $nums[$i];
    }

    if ($left == $right) {
        $ret[] = strval($left);
    } else {
        $ret[] = $left . "->" . $right;
    }

    return $ret;
}