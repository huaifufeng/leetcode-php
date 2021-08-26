<?php
/**
 * https://leetcode-cn.com/problems/all-paths-from-source-to-target/
 *
 * @param Integer[][] $graph
 * @return Integer[][]
 */
function allPathsSourceTarget($graph)
{
    $list = getNext(0, $graph);
    foreach ($list as $index => $item) {
        if ($item[count($item) -1] != count($graph) - 1) {
            unset($list[$index]);
        }
    }

    return array_values($list);
}

function getNext($index, $graph)
{
    if (count($graph[$index]) == 0 || $index == count($graph) - 1) {
        return [[$index]];
    }

    $res = [];
    foreach ($graph[$index] as $val) {
        $nextList = getNext($val, $graph);
        foreach ($nextList as $next) {
            $item = [$index];
            $item = array_merge($item, $next);
            $res[] = $item;
        }
    }

    return $res;
}