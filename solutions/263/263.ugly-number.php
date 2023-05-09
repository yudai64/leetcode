/*
 * @lc app=leetcode id=263 lang=php
 *
 * [263] Ugly Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {
        if ($n < 1) {
            return false;
        }

        while ($n % 2 === 0) {
            $n = $n / 2;
        }
        while ($n % 3 === 0) {
            $n = $n / 3;
        }
        while ($n % 5 === 0) {
            $n = $n / 5;
        }

        return $n === 1;
    }
}
// @lc code=end

