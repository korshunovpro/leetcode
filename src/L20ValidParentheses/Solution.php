<?php

namespace Leetcode\L20ValidParentheses;

/*
    Given a string s containing just the characters '(', ')', '{', '}', '[' and ']',
    determine if the input string is valid.

    An input string is valid if:

    Open brackets must be closed by the same type of brackets.
    Open brackets must be closed in the correct order.
 */

/**
 * Solution.
 *
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */
class Solution
{
    /**
     * Solution.
     *
     * @param string $string String
     */
    public function isValid(string $string): bool
    {
        $result = false;
        $length = strlen($string);

        $tree = [];
        for ($i = 0; $i < $length; ++$i) {
            if ($string)
        }

        return $result;
    }
}
