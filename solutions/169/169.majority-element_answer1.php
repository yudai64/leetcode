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
        $majority = null;
        $count = 0;

        foreach ($nums as $num) {
            if ($count === 0) {
                $majority = $num;
                $count = 1;
            }
            else {
                if ($num === $majority) $count++;
                else $count--;
            }
        }

        return $majority;
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/majority-element/solutions/3109595/100-faster-c-with-explanation-o-1-space/ -->