<?php

namespace Leetcode\L07ReverseInteger;

/*
    7. Reverse Integer
    Easy

    Given a 32-bit signed integer, reverse digits of an integer.

    Example 1:

    Input: 123
    Output: 321
    Example 2:

    Input: -123
    Output: -321
    Example 3:

    Input: 120
    Output: 21
    Note:
    Assume we are dealing with an environment which could only store integers within the 32-bit signed integer range: [−231,  231 − 1]. For the purpose of this problem, assume that your function returns 0 when the reversed integer overflows.
*/

/**
 * Solution.
 *
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse(int $x) : int {
        $reverse = 0;
        $limit = 2**31;
        while($x !== 0) {
            $reverse = ($reverse * 10) + ($x % 10);
            $x = (int)($x / 10);
        }
        return ($reverse > $limit - 1 || $reverse < (-1 * $limit)) ? 0 : $reverse;
    }

    /**
     * @param $x
     * @return float|int
     */
    function reverse2(int $x) : int {
        $reverse = 0;
        $limit = 2**31;
        $k = ($x < 0) ? -1 : 1;
        $x = (string) abs($x);
        for($i = 0; isset($x[$i]); $i++) {
            $reverse = $x[$i] . $reverse;
        }
        $reverse = $k * (int) $reverse;
        return ($reverse > ($limit - 1) || $reverse < (-1 * $limit)) ? 0 : $reverse;
    }

}