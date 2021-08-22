<?php
/**
 * https://leetcode-cn.com/problems/string-compression/
 *
 * @param Integer[][] $ghosts
 * @param Integer[] $target
 * @return Boolean
 */
function escapeGhosts($ghosts, $target)
{
    $line = abs($target[0] - 0);
    $column = abs($target[1] - 0);
    $selfStep = $line + $column;
    foreach ($ghosts as $ghost) {
        $line = abs($target[0] - $ghost[0]);
        $column = abs($target[1] - $ghost[1]);
        $ghost = $line + $column;
        if ($ghost <= $selfStep) {
            return false;
        }
    }

    return true;
}