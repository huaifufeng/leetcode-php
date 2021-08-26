<?php
/**
 * https://leetcode-cn.com/problems/all-paths-from-source-to-target/
 *
 * @param Integer[] $people
 * @param Integer $limit
 * @return Integer
 */
function numRescueBoats($people, $limit) {
    if (count($people) == 1) {
        return 1;
    }
    rsort($people);

    $num = 0;
    while (count($people) > 1) {
        if (($people[0] + $people[count($people) -1]) > $limit) {
            $num++;
            $people = array_slice($people, 1);
        } else {
            $num++;
            $people = array_slice($people, 1, count($people) -2);
        }
    }

    if (count($people) == 1) {
        $num++;
    }

    return $num;
}