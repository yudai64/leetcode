/*
 * @lc app=leetcode id=191 lang=php
 *
 * [191] Number of 1 Bits
 */

// @lc code=start
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $count = 0;

        while ($n != 0) {
            $count++;
            $n &= ($n - 1);
        }

        return $count;
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/number-of-1-bits/solutions/3229926/best-c-3-solution-easy-solution-bit-manipulation-one-stop-solution/ -->
