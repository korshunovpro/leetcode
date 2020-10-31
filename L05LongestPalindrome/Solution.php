<?php

namespace Leetcode\L05LongestPalindrome;

/**
 * Leetcode problems php
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */

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

$s = 'abcabcbb';
//$s = 'bbbbb';
//$s = ' ';
//$s = 'pwwkew';
//$s = 'au';
//$s = 'abba';

//echo 'out: ' . (new Solution())->longestPalindrome($s);
echo 'check: ' . (new Solution())->longestPalindrome('sdfgdasabbax');

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($str) {        
        $iStart = 0;
        $iEnd = strlen($str) - 1;
        $find = false;

        for($i = $iStart; $i <= $iEnd; $s++) {

            $check = $this->checkIsPalindrome($str, $i, $iEnd);
            if ($check >= $iEnd - $iStart) {
                $find = true;
                $iStart = $i;
                $iEnd = $check + $i;
            }
        }

        $result = '';
        for($s = $iStart; $find && $s <= $iEnd; $s++) {
            $result .= $str[$s];
        }

        var_dump($result);

        return $result;
    }

    /**
     * @param string $str
     * @param integer $start
     * @param integer $end
     * @return integer
     */
    function checkIsPalindrome(string $str, int $start, int $end) : int {
        for($s = $start, $e = $end; isset($str[$s]) && isset($str[$e]) && $s <= $e; $s++, $e--) {
            if ($str[$s] !== $str[$e]) return 0;
        }
        return $end - $start;
    }
    
}