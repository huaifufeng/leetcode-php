<?php

/**
 * https://leetcode-cn.com/problems/median-of-two-sorted-arrays/
 *
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Float
 */
function findMedianSortedArrays($nums1, $nums2)
{
    $len1 = count($nums1);
    $len2 = count($nums2);

    $len = $len1 + $len2;
    if ($len % 2 == 0) {
        $left = $len / 2 - 1;
        $right = $len / 2;
    } else {
        $left = $right = intval($len/2);
    }

    $i = $j = 0;
    $index = -1;
    $nums = [];
    while ($i < $len1 || $j < $len2) {
        $n1 = $nums1[$i] ?? 1000001;
        $n2 = $nums2[$j] ?? 1000001;
        if ($n1 > $n2) {
            $index++;
            $min = $n2;
            $j++;
        } else {
            $index++;
            $min = $n1;
            $i++;
        }

        if ($index == $left) {
            $nums[0] = $min;
        }

        if ($index == $right) {
            $nums[1] = $min;
            break;
        }
    }

    return ($nums[0] + $nums[1]) / 2;
}

//合并数组之后去中位数值
//function findMedianSortedArrays($nums1, $nums2)
//{
//    $nums = array_merge($nums1, $nums2);
//    sort($nums);
//    $len = count($nums);
//    if ($len % 2 == 0) {
//        return ($nums[$len / 2] + $nums [$len / 2 - 1]) / 2;
//    } else {
//        return $nums[$len / 2];
//    }
//}