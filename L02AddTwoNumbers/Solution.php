<?php

namespace Leetcode\L02AddTwoNumbers;

/**
 * Leetcode problems php
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */

/*
    2. Add Two Numbers
    Medium

    You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.

    You may assume the two numbers do not contain any leading zero, except the number 0 itself.

    Example:

    Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
    Output: 7 -> 0 -> 8
    Explanation: 342 + 465 = 807.

 */

/**
 * Implements of ListNode.
 */
class ListNode {

    public int $val = 0;
    public null $next = null;

    public function __construct($val)
    {
        $this->val = $val;
    }
}

/**
 * Solution.
 *
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */
class Solution {

    /**
     * Solution.
     *
     * @param ListNode $linkedList1 Linked List 1
     * @param ListNode $linkedList2 Linked List 2
     *
     * @return ListNode
     */
    public function addTwoNumbers(ListNode $linkedList1, ListNode $linkedList2): ListNode
    {
        $result = new ListNode(0);
        $node = $result;

        $carry = 0;
        $lists = [$linkedList1, $linkedList2];
        $isset = count($lists);
        while ($isset) {

            $sum = 0;
            foreach ($lists as $i=>$v) {
                $sum = $sum + $lists[$i]->val;
                $lists[$i] = $lists[$i]->next;
                if (!$lists[$i]) {
                    unset($lists[$i]);
                    $isset--;
                }
            }

            $sum = $sum + $carry;
            $node->val = $sum % 10;
            $carry = (int)($sum / 10);

            if ($isset || $carry) {
                $node->next = new ListNode((!$isset && $carry) ? $carry : 0);
                $node = $node->next;
            }
        }
        
        return $result;
    }
}
