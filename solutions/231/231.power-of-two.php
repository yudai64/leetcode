/*
 * @lc app=leetcode id=231 lang=php
 *
 * [231] Power of Two
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n <= 0) {
            return false;
        }
        if ($n === 1) {
            return true;
        }

        while ($n >= 2) {
            if ($n % 2 !== 0) {
                return false;
            }
            $n = (int)($n/2);
        }

        return true;
    }
}
// @lc code=end

