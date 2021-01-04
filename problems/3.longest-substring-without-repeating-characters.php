<?php

/**
 * https://leetcode-cn.com/problems/longest-substring-without-repeating-characters/
 *
 * @param String $s
 * @return Integer
 */
function lengthOfLongestSubstring($s)
{
    $length = strlen($s);
    if ($length == 0) {
        return 0;
    }

    $substring = $s[0];
    $maxLen = 1;

    for ($i = 1; $i < $length; $i++) {
        $index = strpos($substring, $s[$i]);
        if ($index === false) {
            $substring .= $s[$i];
        } else {
            $temp = strlen($substring);
            if ($temp > $maxLen) {
                $maxLen = $temp;
            }

            $substring .= $s[$i];
            $substring = substr($substring, $index + 1);
        }
    }

    $temp = strlen($substring);
    if ($temp > $maxLen) {
        $maxLen = $temp;
    }

    return $maxLen;
}