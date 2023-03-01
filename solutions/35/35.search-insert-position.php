/*
 * @lc app=leetcode id=35 lang=php
 *
 * [35] Search Insert Position
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;

        while (true) {
            if ($target <= $nums[$left]) {
                return $left;
            }
            if ($target > $nums[$right]) {
                return $right + 1;
            }
            $left++;
            $right--;
        }
    }
}
// @lc code=end

