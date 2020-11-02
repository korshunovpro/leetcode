<?php

namespace Leetcode\L05LongestPalindrome;

/*
    5. Longest Palindromic Substring
    Medium

    Given a string s, find the longest palindromic substring in s. You may assume that the maximum length of s is 1000.

    Example 1:

    Input: "babad"
    Output: "bab"
    Note: "aba" is also a valid answer.
    Example 2:

    Input: "cbbd"
    Output: "bb"
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
     *
     * @param string $str String
     */
    public function longestPalindrome(string $str): string
    {
        $iStart = 0;
        $iEnd = strlen($str) - 1;
        $find = false;

        for ($i = $iStart; $i <= $iEnd; ++$i) {
            $check = $this->checkIsPalindrome($str, $i, $iEnd);
            if ($check >= $iEnd - $iStart) {
                $find = true;
                $iStart = $i;
                $iEnd = $check + $i;
            }
        }

        $result = '';
        for ($s = $iStart; $find && $s <= $iEnd; ++$s) {
            $result .= $str[$s];
        }

        return $result;
    }

    /**
     * CheckIsPalindrome.
     *
     * @param string $str   String
     * @param int    $start Start
     * @param int    $end   End
     */
    public function checkIsPalindrome(string $str, int $start, int $end): int
    {
        for ($s = $start, $e = $end; isset($str[$s]) && isset($str[$e]) && $s <= $e; $s++, $e--) {
            if ($str[$s] !== $str[$e]) {
                return 0;
            }
        }

        return $end - $start;
    }
}
