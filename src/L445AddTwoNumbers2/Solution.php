<?php

namespace Leetcode\L445AddTwoNumbers2;

/*
    445. Add Two Numbers II
    Medium

    You are given two non-empty linked lists representing two non-negative integers. The most significant digit comes first and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.

    You may assume the two numbers do not contain any leading zero, except the number 0 itself.

    Follow up:
    What if you cannot modify the input lists? In other words, reversing the lists is not allowed.

    Example:

    Input: (7 -> 2 -> 4 -> 3) + (5 -> 6 -> 4)
    Output: 7 -> 8 -> 0 -> 7
*/

/**
 * Solution.
 *
 * @author Sergey Korshunov <sergey@korshunov.pro>
 *
 * @todo: not solved
 */
class Solution
{
    /**
     * Solution.
     */
    public function addTwoNumbers(ListNode $listNode1, ListNode $listNode2): ListNode
    {
        $lists = [$listNode1, $listNode2];
        $stacks = [];

        // lists stacks
        foreach ($lists as $k => $v) {
            $stack[$k] = [];
            while ($lists[$k]) {
                array_push($stacks[$k], $lists[$k]->val);
                if ($lists[$k]->next) {
                    $lists[$k] = $lists[$k]->next;
                } else {
                    unset($lists[$k]);
                }
            }
        }
        //\lists stacks

        // sum
        $result = new ListNode(0);
        $carry = 0;
        $isset = count($stacks);
        while ($isset) {
            foreach ($stacks as $i => $v) {
                $sum = $result->val + array_pop($stacks[$i]) + $carry;
                if (!count($stacks[$i])) {
                    --$isset;
                }
            }

            $carry = (int) ($sum / 10);

            if ($isset || $carry) {
                $tmpNode = new ListNode((!$isset && $carry) ? $carry : $sum);
                $tmpNode->next = $result;
                $result = $tmpNode;
            }
        }

        return $result;
    }
}
