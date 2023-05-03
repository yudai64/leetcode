/*
 * @lc app=leetcode id=228 lang=php
 *
 * [228] Summary Ranges
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {
        if (!$nums) return [];

        $result = [];
        $start = $nums[0];

        for ($i = 0; $i < count($nums); $i++) {
            if ($i === count($nums)-1 || $nums[$i]+1 !== $nums[$i+1]) {
                if ($nums[$i] === $start) {
                    $result[] = (string)$nums[$i];
                } else {
                    $result[] = (string)$start . '->' . (string)$nums[$i];
                }
                $start = $nums[$i+1];
            }
        }

        return $result;
    }
}
// @lc code=end

