<?php

namespace Leetcode\L03LengthOfLongestSubstring;

/**
 * Leetcode problems php
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */

/*
    3. Longest Substring Without Repeating Characters
    Medium

    Given a string, find the length of the longest substring without repeating characters.

    Example 1:

    Input: "abcabcbb"
    Output: 3
    Explanation: The answer is "abc", with the length of 3.
    Example 2:

    Input: "bbbbb"
    Output: 1
    Explanation: The answer is "b", with the length of 1.
    Example 3:

    Input: "pwwkew"
    Output: 3
    Explanation: The answer is "wke", with the length of 3.
                 Note that the answer must be a substring, "pwke" is a subsequence and not a substring.
*/

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        
        $check = [];
        $startIndex = 0;
        $length = 0;

        for($i=0; isset($s[$i]); $i++) {
            if (isset($check[$s[$i]]) && $check[$s[$i]] > $startIndex) {
                $startIndex = $check[$s[$i]];
            }
            $check[$s[$i]] = $i+1;
            
            $currLength = $check[$s[$i]] - $startIndex;
            if ($currLength > $length) {                
                $length = $currLength;               
            }
        }
        return $length;
    }
    
}