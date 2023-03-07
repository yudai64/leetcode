/*
 * @lc app=leetcode id=70 lang=php
 *
 * [70] Climbing Stairs
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ($n <= 2) return $n;

        $mem = [];
        $mem[1] = 1;
        $mem[2] = 2;
        for ($i = 3; $i <= $n; $i++) {
            $mem[$i] = $mem[$i-1] + $mem[$i-2];
        }

        return $mem[$n];
    }
}
// @lc code=end

