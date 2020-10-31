<?php

namespace Leetcode\L1207UniqueOccurrences;

/*
    1207. Unique Number of Occurrences
    Easy

    Given an array of integers arr, write a function that returns true if and only if the number of occurrences of each value in the array is unique.



    Example 1:

    Input: arr = [1,2,2,1,1,3]
    Output: true
    Explanation: The value 1 has 3 occurrences, 2 has 2 and 3 has 1. No two values have the same number of occurrences.
    Example 2:

    Input: arr = [1,2]
    Output: false
    Example 3:

    Input: arr = [-3,0,1,-3,1,1,1,-3,10,0]
    Output: true


    Constraints:

    1 <= arr.length <= 1000
    -1000 <= arr[i] <= 1000
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
     * @param int[] $arr Array
     */
    public function uniqueOccurrences(array $arr): bool
    {
        $count = [];
        $length = count($arr);
        for ($i = 0; $i < $length; ++$i) {
            if (!isset($count[$arr[$i]])) {
                $count[$arr[$i]] = 1;
            } else {
                ++$count[$arr[$i]];
            }
        }

        $check = [];
        foreach ($count as $k => $v) {
            if (isset($check[$v])) {
                return false;
            }
            $check[$v] = true;
        }

        return true;
    }
}
