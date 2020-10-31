<?php

namespace Leetcode\L02AddTwoNumbers;

/**
 * Implements of ListNode.
 */
class ListNode
{
    /** @var int */
    public int $val = 0;
    /** @var mixed */
    public $next;

    /**
     * ListNode constructor.
     *
     * @param int $val Value
     */
    public function __construct(int $val)
    {
        $this->val = $val;
    }
}
