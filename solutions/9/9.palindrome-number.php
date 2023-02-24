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
        $strX = (string)$x;
        $len = strlen($strX);

        for ($i = 0; $i < (int)($len/2); $i++) {
            if ($strX[$i] !== $strX[$len - $i - 1]) {
                return false;
            }
        }

        return true;
    }
}
// @lc code=end

