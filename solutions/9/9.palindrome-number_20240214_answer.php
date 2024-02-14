/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }

        $reverse = 0;
        $tmp = $x;

        while ($tmp != 0) {
            $digit = $tmp % 10;
            $reverse = $reverse * 10 + $digit;
            $tmp = intdiv($tmp, 10);
        }

        return $x === $reverse;
    }
}
// @lc code=end

