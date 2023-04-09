/*
 * @lc app=leetcode id=125 lang=php
 *
 * [125] Valid Palindrome
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $converted = mb_strtolower(preg_replace('/[^0-9a-zA-Z]/', '', $s));
        $strlen = mb_strlen($converted);

        for ($i=0; $i < $strlen / 2; $i++) {
            if ($converted[$i] !== $converted[$strlen-$i-1]) {
                return false;
            }
        }

        return true;
    }
}
// @lc code=end

