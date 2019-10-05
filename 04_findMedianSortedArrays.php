<?php
/**
 * Leetcode problems php
 * @author Sergey Korshunov <sergey@korshunov.pro>
 */

/*
    4. Median of Two Sorted Arrays

    There are two sorted arrays nums1 and nums2 of size m and n respectively.

    Find the median of the two sorted arrays. The overall run time complexity should be O(log (m+n)).

    You may assume nums1 and nums2 cannot be both empty.

    Example 1:

    nums1 = [1, 3]
    nums2 = [2]

    The median is 2.0
    Example 2:

    nums1 = [1, 2]
    nums2 = [3, 4]

    The median is (2 + 3)/2 = 2.5
 */

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $result = [];

        $max1 = array_pop($nums1);
        $max2 = array_pop($nums2);

        $count = 0;
        while ($max1 || $max2) {
            while($max2 && ($max1 < $max2)) {
                $result[] = $max2; $count++;
                $max2 = array_pop($nums2);
            }

            while($max1 && ($max1 > $max2)) {
                $result[] = $max1; $count++;
                $max1 = array_pop($nums1);
            }

            if (($max1 && $max2) && ($max1 == $max2)) {
                $result[] = $max1; $count++;
                $result[] = $max2; $count++;

                $max1 = array_pop($nums1);
                $max2 = array_pop($nums2);
            }
        }

        if ($max1 === 0) {
            $result[] = $max1;
            $count++;
        }
        if ($max2 === 0) {
            $result[] = $max2;
            $count++;
        }

        $median = null;
        if (($count % 2) === 0) {
            $median = ($result[$count / 2 - 1] + $result[$count / 2]) / 2;
        } else {
            $median = $result[($count / 2 - 1) + 0.5];
        }

        return $median;
    }
}