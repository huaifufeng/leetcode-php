<?php
/**
 * https://leetcode-cn.com/problems/compare-version-numbers/
 *
 * @param String $version1
 * @param String $version2
 * @return Integer
 */
function compareVersion($version1, $version2)
{
    $version1 = trim($version1, ".");
    $version2 = trim($version2, ".");
    while (strlen($version1) > 0 || strlen($version2) > 0) {
        $v1 = $v2 = 0;
        if (strlen($version1) > 0) {
            $index = stripos($version1, ".");
            if ($index !== false) {
                $v1 = intval(substr($version1, 0, $index));
                $version1 = substr($version1, $index + 1);
            } else {
                $v1 = intval($version1);
                $version1 = "";
            }
        }

        if (strlen($version2) > 0) {
            $index = stripos($version2, ".");
            if ($index !== false) {
                $v2 = intval(substr($version2, 0, $index));
                $version2 = substr($version2, $index + 1);
            } else {
                $v2 = intval($version2);
                $version2 = "";
            }
        }

        if ($v1 > $v2) {
            return 1;
        } else if ($v1 <$v2) {
            return -1;
        }
    }

    return 0;
}