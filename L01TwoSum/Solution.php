<?php

namespace Leetcode\L01TwoSum;

/*
    1. Two Sum
    Easy

    Given an array of integers, return indices of the two numbers such that they add up to a specific target.

    You may assume that each input would have exactly one solution, and you may not use the same element twice.

    Example:

    Given nums = [2, 7, 11, 15], target = 9,

    Because nums[0] + nums[1] = 2 + 7 = 9,
    return [0, 1].
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
     * @param array<int> $nums   Array of integers
     * @param int        $target Target
     *
     * @return array<int>
     */
    public function twoSum(array $nums, int $target): array
    {
        $result = [];
        $count = count($nums);

        $tmp = [];
        for ($i = 0; $i < $count; ++$i) {
            $need = $target - $nums[$i];
            if (isset($tmp[$need])) {
                $result = [$tmp[$need], $i];

                break;
            }
            $tmp[$nums[$i]] = $i;
        }

        return $result;
    }
}
