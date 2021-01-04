<?php

/**
 * https://leetcode-cn.com/problems/add-two-numbers/
 *
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers($l1, $l2)
{
    $head = $l = new ListNode();
    $v = 0;

    while ($l1 != null || $l2 != null) {
        $v1 = $v2 = 0;
        if ($l1 != null) {
            $v1 = $l1->val;
            $l1 = $l1->next;
        }

        if ($l2 != null) {
            $v2 = $l2->val;
            $l2 = $l2->next;
        }

        $temp = $v + $v1 + $v2;

        if ($temp >= 10) {
            $v = 1;
            $temp = $temp - 10;
        } else {
            $v = 0;
        }

        $l->next = new ListNode($temp, null);
        $l = $l->next;
    }

    if ($v > 0) {
        $l->next = new ListNode($v, null);
    }


    return $head->next;
}