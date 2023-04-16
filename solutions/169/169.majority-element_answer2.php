/*
 * @lc app=leetcode id=169 lang=php
 *
 * [169] Majority Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        sort($nums);
        return $nums[intdiv(count($nums),2)];
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/majority-element/solutions/3346654/c-easy-approach-using-sort/ -->
