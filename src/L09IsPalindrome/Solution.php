<?php

namespace Leetcode\L09IsPalindrome;

/*
     9. Palindrome Number
    Easy

    Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.

    Example 1:

    Input: 121
    Output: true
    Example 2:

    Input: -121
    Output: false
    Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
    Example 3:

    Input: 10
    Output: false
    Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
    Follow up:

    Coud you solve it without converting the integer to a string?
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
     * @param int $x Value
     *
     * @return bool
     */
    public function isPalindrome(int $x): bool
    {
        if ($x >= 0) {
            $y = $x;
            $rev = 0;
            while ($y) {
                $rev = $rev * 10 + $y % 10;
                $y = (int) ($y / 10);
            }

            return $rev === $x;
        }

        return false;
    }
}
