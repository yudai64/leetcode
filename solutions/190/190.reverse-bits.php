/*
 * @lc app=leetcode id=190 lang=php
 *
 * [190] Reverse Bits
 */

// @lc code=start
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        $bin = str_pad(decbin($n), 32, '0', STR_PAD_LEFT);

        $ans = 0;
        $place = 0;
        for ($i = 0; $i < strlen($bin); $i++) {
            $ans += $bin[$i] * pow(2, $place);
            $place++;
        }

        return $ans;
    }
}
// @lc code=end
