/*
 * @lc app=leetcode id=58 lang=php
 *
 * [58] Length of Last Word
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $output = 0;
        $index = mb_strlen($s) - 1;

        while ($s[$index] === ' ') {
            $index--;
        }

        while ($index >= 0 && $s[$index] !== ' ') {
            $output++;
            $index--;
        }

        return $output;
    }
}
// @lc code=end

