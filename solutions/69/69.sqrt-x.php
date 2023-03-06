/*
 * @lc app=leetcode id=69 lang=php
 *
 * [69] Sqrt(x)
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $output = 1;
        while ($x >= $output ** 2) $output++;
        return $output - 1;
    }
}
// @lc code=end

