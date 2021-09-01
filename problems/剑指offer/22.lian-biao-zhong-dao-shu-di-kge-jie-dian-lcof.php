<?php

/**
 * https://leetcode-cn.com/problems/lian-biao-zhong-dao-shu-di-kge-jie-dian-lcof/
 *
 * @param ListNode $head
 * @param Integer $k
 * @return ListNode
 */
function getKthFromEnd($head, $k) {
    $list = [];
    while (!is_null($head)) {
        $list[] = $head;
        $head = $head->next;
    }

    return $list[count($list) - $k];
}

function getKthFromEnd1($head, $k) {
    $fast = $head;
    for ($i = 0; $i < $k; $i++) {
        $fast = $fast->next;
    }

    while (!is_null($fast)) {
        $fast = $fast->next;
        $head = $head->next;
    }

    return $head;
}