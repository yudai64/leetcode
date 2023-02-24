/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $output = '';

        for ($i = 0; $i < strlen($strs[0]); $i++) {
            $char = $strs[0][$i];
            for ($j = 1; $j < count($strs); $j++) {
                if (!isset($strs[$j][$i]) || $strs[$j][$i] !== $char) {
                    return $output;
                }
            }
            $output .= $char;
        }

        return $output;
    }
}
// @lc code=end
