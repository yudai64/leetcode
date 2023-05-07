/*
 * @lc app=leetcode id=3 lang=php
 *
 * [3] Longest Substring Without Repeating Characters
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $max = 0;

        $index = 0;
        $table = [];
        while ($index < strlen($s)) {
            $c = $s[$index];
            if (array_key_exists($c, $table)) {
                $max = max($max, count($table));
                $index = $table[$c] + 1;
                $table = [];
            } else {
                $table[$c] = $index;
                $index++;
            }
        }

        return max($max, count($table));
    }
}
// @lc code=end

