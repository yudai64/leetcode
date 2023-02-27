/*
 * @lc app=leetcode id=26 lang=php
 *
 * [26] Remove Duplicates from Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if (count($nums) === 0) return 0;

        $addIndex = 1;
        for ($i = 0; $i < count($nums) - 1; $i++) {
            if ($nums[$i] < $nums[$i+1]) {
                $nums[$addIndex] = $nums[$i+1];
                $addIndex++;
            }
        }

        return $addIndex;
    }
}
// @lc code=end

// https://leetcode.com/problems/remove-duplicates-from-sorted-array/solutions/2983019/java-solution-explanation-runtime-1ms-beats-100/