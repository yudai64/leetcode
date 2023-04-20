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
        $n = (($n & 0b11111111111111110000000000000000) >> 16) | (($n & 0b00000000000000001111111111111111) << 16);
        $n = (($n & 0b11111111000000001111111100000000) >> 8) | (($n & 0b00000000111111110000000011111111) << 8);
        $n = (($n & 0b11110000111100001111000011110000) >> 4) | (($n & 0b00001111000011110000111100001111) << 4);
        $n = (($n & 0b11001100110011001100110011001100) >> 2) | (($n & 0b00110011001100110011001100110011) << 2);
        $n = (($n & 0b10101010101010101010101010101010) >> 1) | (($n & 0b01010101010101010101010101010101) << 1);
        return $n;
    }
}
// @lc code=end

<!-- https://leetcode.com/problems/reverse-bits/solutions/1232842/java-c-0ms-o-1-time-complexity-in-place-detailed-explanation/ -->
