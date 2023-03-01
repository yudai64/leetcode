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
        $start = 0;
        $end = count($nums) - 1;

        while ($start <= $end) {
            $mid = (int)(($start + $end) / 2);
            if ($nums[$mid] === $target) return $mid;
            else if ($nums[$mid] > $target) $end = $mid - 1;
            else $start = $mid + 1;
        }

        return $start;
    }
}
// @lc code=end

